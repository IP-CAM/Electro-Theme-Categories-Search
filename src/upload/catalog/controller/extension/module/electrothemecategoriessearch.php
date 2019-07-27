<?php
class ControllerExtensionModuleElectrothemecategoriessearch extends Controller
{
	public function index(){
		$data=array();

		return $this->load->view('extension/module/electrothemecategoriessearch', $data);
	}
	public function categories(){
		$this->load->model("catalog/category");
		$data=array();
		$data["categories"]=$this->model_catalog_category->getCategories();

		$this->response->addHeader('Content-Type: application/json');
		return $this->response->setOutput(json_encode($data));
	}
	public function search(){
		if (isset($this->request->get["category"]) && isset($this->request->get["query"])){
			$category_id=$this->request->get["category"];
			$search=$this->request->get["query"];

			if ($category_id === 0){
				$query=array(
					"search" => $search
				);
			} else {
				$query=array(
					"search" => $search,
					"category_id" => $category_id
				);
			}
			$this->response->redirect($this->url->link("product/search",$query));
		}
	}
}