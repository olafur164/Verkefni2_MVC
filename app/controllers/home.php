<?php

class Home extends Controller
{
	public function index()
	{
        $books = $this->model->getAllBooks();
		require APP . 'views/templates/header.php';
		require APP . 'views/home/index.php';
		require APP . 'views/templates/footer.php';		
	}
	public function getBook($book_id)
	{
		if (isset($book_id)) {
			$book = $this->model->getBook($book_id);
			if ($book) {
				require APP . 'views/templates/header.php';
				require APP . 'views/home/getBook.php';
				require APP . 'views/templates/footer.php';		
			}
			else {
				echo 'There is no book with this id';
			}
		}
		else {
            header('location: ' . 'home/index');
		}
	}
}
?>