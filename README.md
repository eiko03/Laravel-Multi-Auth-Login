This Is a multi auth login system in laravel. We have created separate provider, password reset and tokensystem. use route /admin/login to login admin. Admin controller should be admin auth  and Home Controller should be User Auth. to create a new admin

php artisan tinker
 $admin=new App\Admin
 $admin->name="Test Admin"
 $admin->email="tipusultan50@gmail.com"
 $admin->password=Hash::make('testpassword')
 $admin->save()
 exit
# Laravel-Multi-Auth-Login
