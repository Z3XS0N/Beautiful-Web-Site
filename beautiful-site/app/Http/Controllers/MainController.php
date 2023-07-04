<?php

namespace App\Http\Controllers;

use Hamcrest\Arrays\MatchingOnce;
use Illuminate\Http\Request;
use App\Models\MainModel;

class MainController extends Controller
{
    public function main()
    {
        $users = MainModel::all();
        return view("main", compact("users"));
    }

    public function profile()
    {
        @$token = $_COOKIE["token"];
        $user = MainModel::where("token", $token)->first();
        if ($user) {
            return view("profile", compact("user"));
        } else {
            return redirect("/");
        }
    }

    public function login(Request $req)
    {
        @$token = $_COOKIE["token"];
        $username = $req->username;
        $email = $req->email;
        $passwd = $req->passwd;
        $user = MainModel::where("username", $username)->first();
        if(!$token){
            if ($user && $email == $user->email && $passwd == $user->password) {
                setcookie("token", $user->token);
                return redirect("profile");
            } else {
                $err = "Veriler Yanlış";
                return view("login", compact("err"));
            }
        }else{
            $err = "Lütfen Başka Bir Hesaba Geçmek İçin Oturumunuzu Kapatınız!";
            return view("login",compact("err"));
        }
    }

    public function work(Request $req){
        @$token = $_COOKIE["token"];
        $des =  $req->des;
        $value = $req->value;
        if(is_numeric($value)){
            if($value > 0 && strlen($des) > 10){
                MainModel::where("token",$token)->update([
                    "work"=>$des,
                    "workvalue"=>$value
                ]);
                return redirect("profile");
            }else{
                echo "deyerleri dogru yaziniz";
            }
        }else{
            echo "yanlis bilgiler";
        }
    }

    public function workplace(){
        @$token = $_COOKIE["token"];
        $works = MainModel::all();
        $user = MainModel::where("token",$token)->first();
        @$moneydb = $user->money;
        if($token){
            return view("workplace",compact("works","moneydb"));
        }else{
            return redirect("/login");
        }
    }

    public function buy(Request $request, $username, $money)
    {
        @$token = $_COOKIE["token"];
        if(is_numeric($money) && $money != null && $token){
            @$user = MainModel::where("token",$token)->first();
            @$user1 = MainModel::where("username",$username)->first();
            if(@$username != $user->username){
                if($user->money >= $money){
                    MainModel::where("token",$token)->update([
                        "money"=>$user->money - $money
                    ]);
                    MainModel::where("username",$username)->update([
                        "money"=>$user1->money + $money
                    ]);
                    $err = "İşlem Başarıyla Yapıldı!";
                    $works = MainModel::all();
                    $user = MainModel::where("token",$token)->first();
                    $moneydb = $user->money;
                    return view("workplace",compact("err","works","moneydb"));
                }else{
                    $err = "Malesef Yeterli Miktarda paranız yok";
                    $works = MainModel::all();
                    $user = MainModel::where("token",$token)->first();
                    $moneydb = $user->money;
                    return view("workplace",compact("err","works","moneydb"));
                }
            }else{
                $err = "Bu zaten sensin napmaya çalışıyorsun😂";
                $works = MainModel::all();
                $user = MainModel::where("token",$token)->first();
                $moneydb = $user->money;
                return view("workplace",compact("err","works","moneydb"));
            }

        }else{
            return redirect("/");
        }
    }

    public function out(){
        setcookie("token","");
        return redirect("login");
    }
}
