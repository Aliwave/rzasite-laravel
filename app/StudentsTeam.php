<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Nomination;
class StudentsTeam extends Model
{
    protected $table = 'studentsteam';
    protected $primaryKey = 'StudentID';
    public $timestamps = false;
    public $incrementing = false;
    public function student(){
        return $this->belongsTo('App\Student','StudentID','StudentID');
    }
    public function team(){
        return $this->belongsTo('App\TeachersTeam','TeamID','TeamID');
    }
    public function winner(){
        function winnerOfNom($all,$columnscore,$columnplace){
            $selfresults = $all->orderBy($columnscore,'desc')->whereNotNull($columnscore)->get();
            $i = 0;
            $tempscore = 1000;
            foreach($selfresults as $selfresult){
                if($tempscore == $selfresult->$columnscore){
                    $tempscore = $selfresult->$columnscore;
                }else{
                    ++$i;
                    $tempscore = $selfresult->$columnscore;
                }
                $selfresult->$columnplace = $i;
                $selfresult->save();
            }
            return $selfresults;
        }
        $nomination = Nomination::find(1);
        $all = $this;
        if($nomination->fullself == 'true'){
            winnerOfNom($all,'SummSelfScore','SummSelfPlace');
        }
        if($nomination->full10self == 'true'){
            winnerOfNom($all,'SummSelf10Score','SummSelf10Place');
        }
        if($nomination->full11self == 'true'){
            winnerOfNom($all,'SummSelf11Score','SummSelf11Place');
        }
        if($nomination->phself == 'true'){
            winnerOfNom($all,'PhSelfScore','PhSelfPlace');
        }
        if($nomination->ph10self == 'true'){
           winnerOfNom($all,'PhSelf10Score','PhSelf10Place'); 
        }
        if($nomination->ph11self == 'true'){
            winnerOfNom($all,'PhSelf11Score','PhSelf11Place');
        }
        if($nomination->infself == 'true'){
            winnerOfNom($all,'InfSelfScore','InfSelfPlace');
        }
        if($nomination->inf10self == 'true'){
            winnerOfNom($all,'InfSelf10Score','InfSelf10Place');
        }
        if($nomination->inf11self == 'true'){
            winnerOfNom($all,'InfSelf11Score','InfSelf11Place');
        }
        if($nomination->mathself == 'true'){
            winnerOfNom($all,'MathSelfScore','MathSelfPlace');
        }
        if($nomination->math10self == 'true'){
            winnerOfNom($all,'MathSelf10Score','MathSelf10Place');
        }
        if($nomination->math11self == 'true'){
            return winnerOfNom($all,'MathSelf11Score','MathSelf11Place');
        }
    }

    public function orderbyID($mas){
        $studentdata = StudentsTeam::whereIn('StudentID', $mas)
        ->orderBy(\DB::raw("FIELD(StudentID, " . implode(',', $mas) . ")"))
        ->get();
        return $studentdata;
    }
}
