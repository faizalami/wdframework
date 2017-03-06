<?php

require_once 'Database.php';

/**
* buat main model
*/
abstract class Model
{
	protected $table;
	protected $db;

	/**
	 * panggil objek library database
	 */
	function __construct()
	{
		$this->db = new Database($this->table);
	}

	/**
	 * tambah where ke query
	 * @param  string $column  kolom untuk dibandingkan
	 * @param  string $compare tanda baca pembanding (=, <>, <, >)
	 * @param  string $value   isi yang dibandingkan
	 */
	public function where($column, $compare, $value)
	{
		$this->db->where($column, $compare, $value);
	}

	/**
	 * insert data ke database
	 * @param  array $data data untuk dimasukkan ke tabel dg format ['kolom1' => 'data1', 'kolom2' => 'data2'[, ...] ]
	 */
	public function insert($data)
	{
		$this->db->insert($data);
	}

	/**
	 * update data
	 * @param  array $data data untuk dimasukkan ke tabel dg format ['kolom1' => 'data1', 'kolom2' => 'data2'[, ...] ]
	 */
	public function update($data)
	{
		$this->db->update($data);
	}

	/**
	 * ambil semua data pada tabel
	 * @return array
	 */
	public function get()
	{
		return $this->db->get();
	}

	/**
	 * ambil satu data pertama
	 * @return array
	 */
	public function first()
	{
		return $this->db->first();
	}
}