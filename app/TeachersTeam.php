<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Nomination;
class TeachersTeam extends Model
{
    protected $table = 'teachersteam';
    protected $primaryKey = 'TeamID';
    public $incrementing = false;
    public $timestamps = false;
    public function teacher(){
        return $this->belongsTo('App\Teacher','TeacherID','TeacherID');
    }
    public function students(){
        return $this->hasMany('App\StudentsTeam','TeamID');
    }
    public function winner(){
        function winnerOfNom($all,$columnscore,$columnplace){
            $teamresults = $all->orderBy($columnscore,'desc')->whereNotNull($columnscore)->get();
            $i = 0;
            $tempscore = 1000;
            foreach($teamresults as $teamresult){
                if($tempscore == $teamresult->$columnscore){
                    $tempscore = $teamresult->$columnscore;
                }else{
                    ++$i;
                    $tempscore = $teamresult->$columnscore;
                }
                $teamresult->$columnplace = $i;
                $teamresult->save();
            }
            return $teamresults;
        }
        $nomination = Nomination::find(1);
        $all = $this;
        if($nomination->fullteam == 'true'){
            winnerOfNom($all,'SummTeamScore','SummTeamPlace');
        }
        if($nomination->phteam == 'true'){
            winnerOfNom($all,'PhTeamScore','PhTeamPlace');
        }
        if($nomination->infteam == 'true'){
            winnerOfNom($all,'InfTeamScore','InfTeamPlace');
        }
        if($nomination->mathteam == 'true'){
            winnerOfNom($all,'MathTeamScore','MathTeamPlace');
        }
    }

    public function orderbyID($mas){
        $studentdata = TeachersTeam::whereIn('TeamID', $mas)
        ->orderBy(\DB::raw("FIELD(TeamID, " . implode(',', $mas) . ")"))
        ->get();
        return $studentdata;
    }
}
