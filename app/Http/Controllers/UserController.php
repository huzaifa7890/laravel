<?php

namespace App\Http\Controllers;
use App\Models\Member;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Insert DATA
    public  function savedata(Request $req){
        $user=New Member;
        $user->pname=$req->pname;
        $user->pprice=$req->pp;
        $user->sprice=$req->salep;
        $user->quantites=$req->quantities;
        if($req->hasfile('file'))
    {
        $file=$req->file('file');
        $extenstion= $file->getClientOriginalExtension();
        $filename=time().'.' .$extenstion;
        $file->move('uploads',$filename);
        $user->image=$filename;

    }
        $user->save();
        return redirect('product');
    
}

public function show(){
    $data=Member::all();
    return view('product',['users'=>$data]);
    }
    public function delete($id)
    {
        $data=Member::find($id);
        $data->delete();
        return redirect()->back();
    }
    // update DATA
   public function update($id){

        $data= Member::find($id);
        return view('upproduct',['user'=>$data]);
    }
   public function update1(Request $re, $id){

        if($re->hasfile('file'))
        {
            $file=$re->file('file');
            $extenstion= $file->getClientOriginalExtension();
            $filename=time().'.' .$extenstion;
            $file->move('uploads',$filename);
            Member::where('id', $id)->Update([
                'pname'=>$re->pname,
                'pprice'=>$re->pp,
                'sprice'=>$re->salep,
                'quantites'=>$re->quantities,
                'image'=>$filename, 
                ]);
    
        }
   
    return redirect('product');
    }
// Search 
    public function search(Request $request){
    
        if($request->ajax()){
    
            $data=Member::where('id','like','%'.$request->search.'%')
            ->orwhere('pname','like','%'.$request->search.'%')->get();
        }
        else{
            $data=Member::all();
        }
    
            $output='';
        if(count($data)>0){
    
             $output ='
                <table class="table">
                <thead>
                <tr>
                <th>SR NO</th>
                <th>Name</th>
                <th>Sale</th>
                <th>Purchase</th>
                <th>Quantity</th>
                <th>Image</th>
                <th>Action</th>

                </tr>
                </thead>
                <tbody>';
    
                    foreach($data as $row){
                        $output .='
                        <tr>
                        <th scope="row">'.$row->id.'</th>
                        <td>'.$row->pname.'</td>
                        <td>'.$row->sprice.'</td>
                        <td>'.$row->pprice.'</td>
                        <td>'.$row->quantites.'</td>
                        <td><img src="uploads/'.$row->image.'" width=50px></td>
                        <td><a href="delete/'.$row->id.'" class="btn btn-warning waves-effect waves-float btn-sm waves-green"><i class="zmdi zmdi-delete"></i></a>
                        <a href="update/'.$row->id.'" class="btn btn-danger waves-effect waves-float btn-sm waves-red"><i class="zmdi zmdi-edit"></i></a> </td>
                  
                        </tr>
                        ';
                    }       $output .= '
                 </tbody>
                </table>';
        }
        else{
            $output .='No results';  
          }
        return $output;
    
      }
    //   for trash 
public function trash(){
    $data=Member::onlyTrashed()->get();
    return view('trash',['data'=>$data]);
}
public function forcedel($id)
{
    $data=Member::withTrashed()->find($id)->forcedelete();
    return redirect()->back();
}
public function restore($id)
{
    $data=Member::withTrashed()->find($id)->restore();
    return redirect()->back();
}




}
