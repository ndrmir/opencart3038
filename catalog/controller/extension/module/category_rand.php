<?php
class ControllerExtensionModuleCategoryRand extends Controller
{
	public function index() {
		$this->load->language('extension/module/category_rand');

		if (isset($this->request->get['path'])) {
			$parts = explode('_', (string)$this->request->get['path']);
		} else {
			$parts = array();
		}

		if (isset($parts[0])) {
			$data['category_id'] = $parts[0];
		} else {
			$data['category_id'] = 0;
		}

		if (isset($parts[1])) {
			$data['child_id'] = $parts[1];
		} else {
			$data['child_id'] = 0;
		}

		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		$data['categories'] = array();

		$categories = $this->model_catalog_category->getCategories(0);

		$this->load->model('tool/image');

		foreach ($categories as $result) {
             
			$children_data = array();
		  
			$children = $this->model_catalog_category->getCategories($result['category_id']);
			
			if (count($children) < 3) {
				$count = count($children);
			} else {
				$count = 3;
			}
			$childrenRandKeys = [];
			if ($count) {
				$childrenRandKeys = array_rand($children, $count);
			}			

			foreach ($childrenRandKeys as $value) {
				$child = $children[$value];
			  	$filter_data = array('filter_category_id' => $child['category_id'], 'filter_sub_category' => true);
		  
			  	$children_data[] = array(
					'category_id' => $child['category_id'],
					'name' => $child['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
					'href' => $this->url->link('product/category', 'path=' . $result['category_id'] . '_' . $child['category_id'])
			  	);
			}
		   
			$filter_data = array(
			  'filter_category_id'  => $result['category_id'],
			  'filter_sub_category' => true
			);
			
			if ($result['image']) {
				$image = $this->model_tool_image->resize($result['image'], 100, 50);
				} else {
				$image = false;
				}

			$data['categories'][] = array(
			  'name' => $result['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
			  'children'    => $children_data,
			  'href' => $this->url->link('product/category', 'path=' . $result['category_id']),
			  'thumb'    => $image
			 );
		}

		return $this->load->view('extension/module/category_rand', $data);
	}
}
