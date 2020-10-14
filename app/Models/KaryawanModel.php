<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PDO;
use Illuminate\Support\Facades\DB;

class KaryawanModel extends Model
{
	public function getKaryawan()
	{

		$pdo = DB::getPdo();

		$sql = "SELECT * FROM karyawan INNER JOIN jabatan on karyawan.jabatan_id = jabatan.jabatan_id";

		$statement = $pdo->prepare($sql);
		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_OBJ);
	}
	public function getJJabatan()
	{

		$pdo = DB::getPdo();

		$sql = "SELECT COUNT(jabatan_nama) AS jumlahj FROM jabatan";

		$statement = $pdo->prepare($sql);
		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_OBJ);
	}
	public function getJKaryawan()
	{

		$pdo = DB::getPdo();

		$sql = "SELECT COUNT(karyawan_nama) AS jumlahk FROM karyawan";

		$statement = $pdo->prepare($sql);
		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_OBJ);
	}
	public function getTGaji()
	{

		$pdo = DB::getPdo();

		$sql = "SELECT SUM(jabatan_gaji)  AS jumlahg FROM karyawan INNER JOIN jabatan on karyawan.jabatan_id = jabatan.jabatan_id";

		$statement = $pdo->prepare($sql);
		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_OBJ);
	}
	

	public function getJabatan()
	{

		$pdo = DB::getPdo();

		$sql = "SELECT * FROM Jabatan ";

		$statement = $pdo->prepare($sql);
		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_OBJ);
	}
}
