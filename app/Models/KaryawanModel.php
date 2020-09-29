<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PDO;
use Illuminate\Support\Facades\DB;

class KaryawanModel extends Model
{
    public function getKaryawan(){

		$pdo = DB::getPdo();

		$sql = "SELECT * FROM karyawan INNER JOIN jabatan on karyawan.jabatan_id = jabatan.jabatan_id";

		$statement = $pdo->prepare($sql);
		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_OBJ);
}
}