<?php

class Book extends Controller
{
	public function index()
	{
        $books = $this->model->getBook();
		require APP . 'views/templates/header.php';
		require APP . 'views/book/index.php';
		require APP . 'views/templates/footer.php';		
	}
}
?>