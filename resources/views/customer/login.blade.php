@extends('master.site')

@section('title','About page title')

@section('main')
<div class="main_bg1">
    <div class="wrap">
        <div class="main1">
            <h2>Đăng ký tài khoản</h2>
        </div>
    </div>
</div>
<!-- start main -->
<div class="main_bg">
    <div class="wrap">
        <div class="main">
            
            <form action="" method="POST" role="form">
                @csrf
                <legend>Form đăng ký</legend>
            
        
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Input email">
                </div>
            

                <div class="form-group">
                    <label for="">Mật khẩu</label>
                    <input type="password" class="form-control" name="password" placeholder="Input address">
                    @error('password')
                        <small class="help-block">{{$message}}</small>
                    @enderror
                </div>
            
              
                
            
                <button type="submit" class="btn btn-primary">Đăng nhập</button>
            </form>
            
            <div class="clear"></div>
        </div>
    </div>
</div>
@stop()