<?php 

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Preferiti;

class change_pController extends BaseController {

    public function change(){

        $request = request();
        if (isset($request['op']) && isset($request['np']) && isset($request['c_np'])) {

            function validate($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            $op = validate($request['op']);
            $np = validate($request['np']);
            $c_np = validate($request['c_np']);
            
            if(empty($op)){
                return view('change-password')->with(['error' => 'Old Password is required']);
            }else if(empty($np)){
                return view('change-password')->with(['error' => 'New Password is required']);
            }else if($np !== $c_np){
                return view('change-password')->with(['error' => 'The confirmation password does not match']);
            }else {
                $id = session('user_id');
                $val = User::find($id);
                
                $sql = User::where('id', $val['id'])->get('password');
                       
                if($sql[0]['password'] == $op)
                {
                    $sql_2 = User::where('id', $val['id'])->update(['password'=>$np]);
                    return redirect("logout");

                }else {
                    return view('change-password')->with(['error' => 'Incorrect password']);
                }
       
            }

        }
    }
}
?>