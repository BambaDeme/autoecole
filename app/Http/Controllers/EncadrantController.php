<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\EncadrantUpdateRequest;
use App\Repositories\EncadrantRepository;
use Illuminate\Support\Str;
class EncadrantController extends Controller
{
    protected $encadrant;
    
    public function __construct(EncadrantRepository $encadrant)
    {
        $this->middleware('auth');
        $this->encadrant = $encadrant;
    }

   /* public function home(){
        return view('encadrant.index');
    }*/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('encadrant.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $user = $this->encadrant->profile($id);
        return view('encadrant.profile',['user'=>$user]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = $this->encadrant->profile($id);
        return view('encadrant.edit',['profile'=>$profile]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EncadrantUpdateRequest $request, $id)
    {
        $inputs = array_merge($request->all());
        if ($request->file('img') != NULL) {
            $image = $request->file('img');
            if($image->isValid()){
                $chemin = 'images';
                $extension = $image->getClientOriginalExtension();
                do{
                    $nom=Str::random(20).'.'.$extension;
                }while(file_exists($chemin.'/'.$nom));
                if($image->move($chemin,$nom)){
                    $inputs['img'] = $chemin.'/'.$nom;
                }
            }      
        }
        $this->encadrant->update($inputs,$id);
        return view('encadrant.index')->with("status","Informations modifies avec succes");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
