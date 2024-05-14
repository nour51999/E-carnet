Route::view('profil','profil');
Route::get('/logout',function(){

if(session()->has('user'))
{
    session()->pull('user',null);
}
return redirect('login');});

Route::get('/login',function(){

    if(session()->has('user'))
    {
        return redirect('profil');
    }
    return view('login');});


Route::post("user",[UserAuth::class,'userLogin']);