<?php

class ControllerExtensionModuleHelloworld extends Controller
{
	// public function index($setting)
	// {
	// 	if (isset($setting['name'][$this->config->get('config_language_id')])) {
	// 		$data['html'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['title'], ENT_QUOTES, 'UTF-8');
	// 		return $this->load->view('extension/module/helloworld', $data);
	// 	}
	// }
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

		// $isHave = $this->model_catalog_category->getTotalCategoriesByCategoryId(25);
		// var_dump($isHave);
		// $categories = $this->model_catalog_category->getCategories(25);
		// echo '<p>';
		// print_r($categories);
		// echo '</p>';

		// foreach ($categories as $category) {
		// 	$children_data = array();

		// 	if ($category['category_id'] == $data['category_id']) {
		// 		$children = $this->model_catalog_category->getCategories($category['category_id']);

		// 		foreach($children as $child) {
		// 			$filter_data = array('filter_category_id' => $child['category_id'], 'filter_sub_category' => true);

		// 			$children_data[] = array(
		// 				'category_id' => $child['category_id'],
		// 				'name' => $child['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
		// 				'href' => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'])
		// 			);
		// 		}
		// 	}

		// 	$filter_data = array(
		// 		'filter_category_id'  => $category['category_id'],
		// 		'filter_sub_category' => true
		// 	);

		// 	$data['categories'][] = array(
		// 		'category_id' => $category['category_id'],
		// 		'name'        => $category['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
		// 		'children'    => $children_data,
		// 		'href'        => $this->url->link('product/category', 'path=' . $category['category_id'])
		// 	);
		// }
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

			foreach($childrenRandKeys as $value) {
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
