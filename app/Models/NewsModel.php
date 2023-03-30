<?php
namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
	protected $table = 'news';

	protected $allowedFields = ['title', 'slug', 'body'];

	public function getNews($slug = false)
	{
		if($slug === false){
			$this->orderBy('id', 'DESC');
			return $this->findAll();
		}

		$this->where(['slug' => $slug]);

		return $this->first();
	}
}