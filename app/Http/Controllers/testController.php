<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\GLetter;
use App\Models\InnerDepartment;
use App\Models\Letter;
use App\Models\Paper;
use App\Models\PaperDepartment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class testController extends Controller
{

    public function test()
    {

        
        



       // //paper with departments
        // $papers = PaperDepartment::all();
        //     foreach($papers as $item){
        //         $inner = $item->department->innerDepartment;
        //         echo("paper id ".$item->paper_id."    inner dep id : ".$inner->id."<br/>");
        //     }


        ////weekly done papers
        // $weeklyLetters = Letter::whereHas('letter_department',function($query){
        //     $query->whereBetween('date',['2018-6-27','2018-7-4']);
        // })->where('state','done')->get();

        // foreach($weeklyLetters as $item){
        //     echo("weekly done papers : ".$item."<br/>");
        // }



        //  //weekly not done papers
        //  $weeklyLetters = Letter::whereHas('letter_department',function($query){
        //     $query->whereBetween('date',['2018-6-27','2018-7-27']);
        // })->where('state','!=','done');
        // echo("weekly papers where state done : ".$weeklyLetters->first()."<br/>");






        //monthly not done papers
        // $weeklyLetters = DB::table("letter_department")
        //                     ->join('letters', 'letter_department.letter_id', '=', 'letters.id')
        //                     ->join('departments','letter_department.department_id', '=', 'departments.id')
        //                     ->get();



        //dealing with date
        // $today = date("Y-m-d");
        // $lastMonth = date("Y-m-d",strtotime("-1 month"));

        // echo("today : ".$today."<br/>"."beforMonth : ".$lastMonth);




        // $weeklyLetters = Letter_department::whereHas('letter')->whereHas('department')
        //     ->get();

        // foreach ($weeklyLetters as $item) {
        //     echo ("letter : " . $item->letter->paper->first()->title . "<br/>
        //            from : " . $item->department->name . "<br/>" . "to : " . DB::table("departments")
        //         ->where('id', '=', $item->to_id)->first()->name . "<br/>" .
        //         "date : " . $item->date . "<br/>" .
        //         "description : " . $item->discription . "<br/>");
        //     echo "<br/>";
        // }




        // //the paper with its attachments
        // $paperWithAtach = Letter::whereHas('papers')->get();

        // foreach($paperWithAtach as $item){
        //     echo("<br/>letter : ".$item->paper->title."<br/> has : <br/>");

        //     foreach($item->papers as $i){
        //         echo("paper : ".$i."<br/>");
        //     }
        // }

        // //search about papers
        // $searchPaper = Paper::where('title','like','%'.$search.'%')->get();
        // foreach($searchPaper as $item){
        //         echo("<br/>paper : ".$item->title."<br/>");
        // }


        // // search about papers by tags
        // $searchPaper = Paper::whereHas('tags',function($query){
        //     $ar = ["fix","ways","projects"];
        //     $query->whereIn('tags.title',$ar);
        // })->get();
        // foreach($searchPaper as $item){
        //         echo("<br/>paper : ".$item->title."<br/>");
        // }


        // //department with its papers
        // $depWithPapers = Department::whereHas('department_paper',function($query){
        //     $query->where('type',1);
        // })->get();
        // foreach($depWithPapers as $item){
        //     echo("dep neme : ".$item->name."<br/> has : <br/>");
        //     foreach($item->papers as $p){
        //         echo("paper : ".$p->title."<br/>");
        //     }
        // }


        // //exported letters
        // $exLetters = Letter::where('type','like','export')->get();
        // foreach($exLetters as $item){
        //     echo($item->paper->title."<br/>");
        // }

        //  //imported letters
        // $imLetters = Letter::where('type','like','import')->get();
        // foreach($imLetters as $item){
        //     echo($item->paper->title."<br/>");
        // }



        // $paper = new Paper();
        // $paper->title = "do projects";
        // $paper->save();

        // $paper2 = new Paper();
        // $paper2->title = "move employee";
        // $paper2->save();

        // $paper = new Paper();
        // $paper->title = "projects detials";
        // $paper->save();

        // $letter = new Letter();
        // $letter->type = "inner";
        // $letter->paper_id = 1;
        // $letter->save();

        // $letter2 = new Letter();
        // $letter2->type = "inner";
        // $letter2->paper_id = 3;
        // $letter2->save();

        // $letter2 = new Letter();
        // $letter2->type = "outter";
        // $letter2->paper_id = 3;
        // $letter2->save();



        // $department = new Department();
        // $department->name = "boss";
        // $department->phone = "715556428";
        // $department->save();

        // $department2 = new Department();
        // $department2->name = "muhafed";
        // $department2->phone = "715556428";
        // $department2->save();

        // $department2 = new Department();
        // $department2->name = "management";
        // $department2->phone = "715556428";
        // $department2->save();

        // $craetePaper = new PaperDepartment();
        // $craetePaper->paper_id = 1;
        // $craetePaper->department_id = 1;
        // $craetePaper->type = 2;
        // $craetePaper->save();
        // $craetePaper = new PaperDepartment();
        // $craetePaper->paper_id = 1;
        // $craetePaper->department_id = 2;
        // $craetePaper->type = 1;
        // $craetePaper->save();

        // $craetePaper = new PaperDepartment();
        // $craetePaper->paper_id = 2;
        // $craetePaper->department_id = 1;
        // $craetePaper->type = 1;
        // $craetePaper->save();

        // $craetePaper = new PaperDepartment();
        // $craetePaper->paper_id = 2;
        // $craetePaper->department_id = 3;
        // $craetePaper->type = 1;
        // $craetePaper->save();

        // $inner = new InnerDepartment();
        // $inner->id = 1;
        // $inner->department_id = 1;
        // $inner->save();

        // $inner = new InnerDepartment();
        // $inner->id = 2;
        // $inner->department_id = 2;
        // $inner->save();


        // $inner = new InnerDepartment();
        // $inner->id = 3;
        // $inner->department_id = 3;
        // $inner->save();

    }


}
