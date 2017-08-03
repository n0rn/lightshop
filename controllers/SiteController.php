<?php



class SiteController
{

    public function actionIndex()
    {
        $categories = [];
        $categories = Category::getCategoriesList();

        $latestProducts = [];
        $latestProducts = Product::getLatestProducts(6);
        

        $userEmail = false;
    	$result = false;

    	if (isset($_POST['submit'])) {
    		$userEmail = $_POST['userEmail'];

    		$errors = false;

    		if (!User::checkEmail($userEmail)) {
    			$errors[] = 'Неправильный email';
    		}

    		if ($erorrs = false) {
    			$adminEmail = 'judin-slavn@rambler.ru';
    			$message = "Новая подписка от {$userEmail}";
    			$subject = '';
    			$result = mail($adminEmail, $subject, $message);
    			$result = true;
    		}
    	}
        
        require_once(ROOT . '/views/site/index.php');

        return true;
    }



}
