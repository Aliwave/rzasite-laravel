<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MainPage;
use Illuminate\Support\Facades\Storage;

class MainPageController extends Controller
{
    public function index(){
        $mainlogo = MainPage::find(1);
        $mainimage = MainPage::find(2);
        $firstroundimage = MainPage::find(3);
        $secondroundimage = MainPage::find(4);
        $thirdroundimage = MainPage::find(5);
        $facultylogo = MainPage::find(6);
        return view('adminpanel.mainpage',[
            'mainlogo' => $mainlogo,
            'mainimage' => $mainimage,
            'firstroundimage' => $firstroundimage,
            'secondroundimage'=> $secondroundimage,
            'thirdroundimage' => $thirdroundimage,
            'facultylogo' => $facultylogo
        ]);
    }

    public function submit(Request $request)
    {
        $paths = [];
        $this->validate($request,[
            'mainlogo' => 'image|mimetypes:image/jpeg,image/png',
            'mainimage' => 'image|mimetypes:image/jpeg,image/png',
            'firstroundimage' => 'image|mimetypes:image/jpeg,image/png',
            'secondroundimage' => 'image|mimetypes:image/jpeg,image/png',
            'thirdroundimage' => 'image|mimetypes:image/jpeg,image/png',
            'facultylogo' => 'image|mimetypes:image/jpeg,image/png,image/svg+xml',
            'pdfInfLetter'=>'mimetypes:application/pdf',
            'pdfStatement'=>'mimetypes:application/pdf'
        ]);
        
        
        if($request->file('mainlogo')!=null){
            if(MainPage::find(1)==null){
                $data = new MainPage();
            }else{
                $data = MainPage::find(1);
            }
            $imagefile = $request->file('mainlogo');
            $extension = $request->file('mainlogo')->getClientOriginalExtension();
            $imageName = 'mainlogo.'.$extension;
            $data->imagename = $imageName;
            $data->imagepath = storage_path('app\mainpage\img\\'). $imageName;
            $imageFolder = 'public/mainpage/img';
            Storage::putFileAs($imageFolder,$imagefile,$imageName);
            $data->tasks = $request->input('editordata');
            $data->save();
        }

        if($request->file('mainlogo') == null){
            if(MainPage::find(1)==null){
                $data = new MainPage();
            }else{
                $data = MainPage::find(1);
            }
            $data->tasks = $request->input('editordata');
            $data->save();
        }
        
        

        if($request->file('mainimage')!=null){
            if(MainPage::find(2)==null){
                $data = new MainPage();
            }else{
                $data = MainPage::find(2);
            }
            
            $imagefile = $request->file('mainimage');
            $extension = $request->file('mainimage')->getClientOriginalExtension();
            $imageName = 'mainimage.'.$extension;
            $data->imagename = $imageName;
            $data->imagepath = storage_path('app\mainpage\img\\'). $imageName;
            $imageFolder = 'public/mainpage/img';
            Storage::putFileAs($imageFolder,$imagefile,$imageName);
            $data->save();
        }
        
        if($request->file('firstroundimage')!=null){
            if(MainPage::find(3)==null){
                $data = new MainPage();
            }else{
                $data = MainPage::find(3);
            }
            
            $imagefile = $request->file('firstroundimage');
            $extension = $request->file('firstroundimage')->getClientOriginalExtension();
            $imageName = 'firstroundimage.'.$extension;
            $data->imagename = $imageName;
            $data->imagepath = storage_path('app\mainpage\img\\'). $imageName;
            $imageFolder = 'public/mainpage/img';
            Storage::putFileAs($imageFolder,$imagefile,$imageName);
            $data->save();
        }

        if($request->file('secondroundimage')!=null){
            if(MainPage::find(4)==null){
                $data = new MainPage();
            }else{
                $data = MainPage::find(4);
            }
            $imagefile = $request->file('secondroundimage');
            $extension = $request->file('secondroundimage')->getClientOriginalExtension();
            $imageName = 'secondroundimage.'.$extension;
            $data->imagename = $imageName;
            $data->imagepath = storage_path('app\mainpage\img\\'). $imageName;
            $imageFolder = 'public/mainpage/img';
            Storage::putFileAs($imageFolder,$imagefile,$imageName);
            $data->save();
        }

        if($request->file('thirdroundimage')!=null){
            if(MainPage::find(5)==null){
                $data = new MainPage();
            }else{
                $data = MainPage::find(5);
            }
            
            $imagefile = $request->file('thirdroundimage');
            $extension = $request->file('thirdroundimage')->getClientOriginalExtension();
            $imageName = 'thirdroundimage.'.$extension;
            $data->imagename = $imageName;
            $data->imagepath = storage_path('app\mainpage\img\\'). $imageName;
            $imageFolder = 'public/mainpage/img';
            Storage::putFileAs($imageFolder,$imagefile,$imageName);
            $data->save();
        }

        if($request->file('facultylogo')!=null){
            if(MainPage::find(6)==null){
                $data = new MainPage();
            }else{
                $data = MainPage::find(6);
            }
            $imagefile = $request->file('facultylogo');
            $extension = $request->file('facultylogo')->getClientOriginalExtension();
            $imageName = 'facultylogo.'.$extension;
            $data->imagename = $imageName;
            $data->imagepath = storage_path('app\mainpage\img\\'). $imageName;
            $imageFolder = 'public/mainpage/img/';
            Storage::putFileAs($imageFolder,$imagefile,$imageName);
            $data->save();
        }

        if($request->file('pdfInfLetter')!=null){
            if(MainPage::find(7)==null){
                $data = new MainPage();
            }else{
                $data = MainPage::find(7);
            }
            $file = $request->file('pdfInfLetter');
            $extension = $request->file('pdfInfLetter')->getClientOriginalExtension();
            $Name = 'pdfInfLetter.'.$extension;
            $data->imagename = $Name;
            $data->imagepath = storage_path('app\mainpage\\'). $Name;
            $Folder = 'public/mainpage';
            Storage::putFileAs($Folder,$file,$Name);
            $data->save();
        }

        if($request->file('pdfStatement')!=null){
            if(MainPage::find(8)==null){
                $data = new MainPage();
            }else{
                $data = MainPage::find(8);
            }
            $file = $request->file('pdfStatement');
            $extension = $request->file('pdfStatement')->getClientOriginalExtension();
            $Name = 'pdfStatement.'.$extension;
            $data->imagename = $Name;
            $data->imagepath = storage_path('app\mainpage\\'). $Name;
            $Folder = 'public/mainpage';
            Storage::putFileAs($Folder,$file,$Name);
            $data->save();
        }

        return 
        back()
            ->with('success', 'Данные загружены.');
    }
}
