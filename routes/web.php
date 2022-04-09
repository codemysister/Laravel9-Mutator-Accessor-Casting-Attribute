<?php

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/generate', function () {
    Mahasiswa::create([
        'nim' => '20102082',
        'nama' => 'Deva Apriana',
        'tanggal_lahir' => '2002-04-27',
        'ipk' => 3.99,
    ]);

    Mahasiswa::create([
        'nim' => '20102083',
        'nama' => 'Irene',
        'tanggal_lahir' => '2002-04-28',
        'ipk' => 3.98,
    ]);

    Mahasiswa::create([
        'nim' => '20102081',
        'nama' => 'Nayeon',
        'tanggal_lahir' => '2002-04-26',
        'ipk' => 4.00,
    ]);

    Mahasiswa::create([
        'nim' => '20102080',
        'nama' => 'Joy',
        'tanggal_lahir' => '2002-04-25',
        'ipk' => 3.95,
    ]);

    Mahasiswa::create([
        'nim' => '20102084',
        'nama' => 'Wendy',
        'tanggal_lahir' => '2002-04-29',
        'ipk' => 3.94,
    ]);

    User::create([
        'name' => 'Admin',
        'email' => 'admin@gmail.com',
        'password' => Hash::make('admin123')
    ]);

    return "Penambahan data tabel berhasil";
});

Route::get('/tampil1', function () {
    $mahasiswas = Mahasiswa::all();
    foreach ($mahasiswas as $mahasiswa) {
        echo "$mahasiswa->id | ";
        echo "$mahasiswa->nama | ";
        echo "$mahasiswa->nama_besar | ";
        echo "$mahasiswa->tanggal_lahir | ";
        echo "$mahasiswa->ipk <hr> ";
    }
});

Route::get('/tambah', function () {
    Mahasiswa::create([
        'nim' => '19005011',
        'nama' => 'Riana Putria',
        'tanggal_lahir' => '2000-11-23',
        'ipk' => 2.9
    ]);

    return "Berhasil di proses";
});

Route::get('/tambah-user1', function () {
    User::create([
        'name' => 'Seulgi',
        'email' => 'seulgi@gmail.com',
        'password' => Hash::make('user123')
    ]);
});

Route::get('/tambah-user2', function () {
    User::create([
        'name' => 'Yeri',
        'email' => 'yeri@gmail.com',
        'password' => 'user123'
    ]);

    return 'Berhasil diproses';
});

Route::get('/tampil-user', function () {
    $users = User::all();
    foreach ($users as $user) {
        echo "$user->id | ";
        echo "$user->name | ";
        echo "$user->email | ";
        echo "$user->password <br><br>";
    }
});

Route::get('/tambah-user3', function () {
    User::create([
        'name' => 'Sana',
        'email' => 'sana@gmail.com',
        'password' => 'qwerty'
    ]);

    return "Berhasil diproses";
});
