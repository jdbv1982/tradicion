<?php use Tradicion\Repositories\ProductoRepo;


class ProductoController extends BaseController {

	protected $productoRepo;

	public function __construct(ProductoRepo $productoRepo){
		$this->productoRepo = $productoRepo;
	}

	public function getItem(){
		$id = $_POST['id'];
		return Response::json($this->productoRepo->find($id));
	}

	public function getSugerencia(){
		$idioma = $_POST['idioma'];
		if($idioma == "inicio"){
			$id= rand(1, 9);
		}else{
			$id= rand(21, 29);
		}
		return Response::json($this->productoRepo->find($id));
	}
}
