<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sources extends MY_Controller {

	public function __construct() {
	   parent::__construct();
	}
	public function index($page=1) {
		$this->load->library('pagination');
		$config['base_url'] = site_url($this->router->reverseRoute('sources')) . '/pagina/';
		$config['first_url'] = site_url($this->router->reverseRoute('sources'));
		$config['uri_segment'] = 3;
		$results = Report::all(array('select' => 'distinct site'));
		$config['total_rows'] = count($results);
		$this->pagination->initialize($config);
		$data['pagination_links'] = $this->pagination->create_links();
		$data['page_title'] =  _("Top ranking de fuentes");
		$data['title'] =  _("Top medios");
		$data['subtitle'] =  _("Cuáles son los diarios con más reportes, re:medios y noticias en RE:media");
		$data['description'] =  _("Listados de fuentes registrados en RE:media");
		$data['main_content'] = 'sources/list_sources';
		$data['page'] = $page;
		$data['sources'] = Report::find_by_sql('SELECT site, sum(karma) as karma, count(id) as news,
											sum(votes_count) as total_fixes FROM reports
											GROUP BY site ORDER BY karma DESC
											LIMIT ' .  $this->pagination->per_page*($page-1) . ',' . $this->pagination->per_page);
		$data = get_sidebars_blocks($data);
		$this->load->view('includes/template', $data);
	}
	public function reports($page=1) {
		$this->load->library('pagination');
		$config['base_url'] = site_url($this->router->reverseRoute('sources-reports')) . '/pagina/';
		$config['first_url'] = site_url($this->router->reverseRoute('sources-reports'));
		$config['uri_segment'] = 4;
		$results = Report::all(array('select' => 'distinct site'));
		$config['total_rows'] = count($results);
		$this->pagination->initialize($config);
		$data['pagination_links'] = $this->pagination->create_links();
		$data['page_title'] =  _("Top ranking de fuentes por reportes");
		$data['subtitle'] =  _("Cuáles son los diarios que más correcciones y/o ampliaciones han recibido");
		$data['title'] =  _("Top medios por re:medios");
		$data['description'] =  _("Listados de fuentes registrados en RE:media ordenados por número de reportes");
		$data['main_content'] = 'sources/list_sources';
		$data['page'] = $page;
		$data['sources'] = Report::find_by_sql('SELECT r.site, sum(r.karma) as karma, count(r.id) as news,
											sum(r.votes_count) as total_fixes, SUM(reportes) as reportes FROM reports r
											LEFT JOIN (SELECT report_id, count(id) as reportes FROM reports_data GROUP BY report_id) as rd ON (r.id=rd.report_id)
											GROUP BY r.site ORDER BY reportes DESC
											LIMIT ' .  $this->pagination->per_page*($page-1) . ',' . $this->pagination->per_page);
		$data = get_sidebars_blocks($data);
		$this->load->view('includes/template', $data);
	}

	public function fixes($page=1) {
		$this->load->library('pagination');
		$config['base_url'] = site_url($this->router->reverseRoute('sources-fixes')) . '/pagina/';
		$config['first_url'] = site_url($this->router->reverseRoute('sources-fixes'));
		$config['uri_segment'] = 4;
		$results = Report::all(array('select' => 'distinct site'));
		$config['total_rows'] = count($results);
		$this->pagination->initialize($config);
		$data['pagination_links'] = $this->pagination->create_links();
		$data['page_title'] =  _("Top ranking de fuentes por fixes");
		$data['title'] =  _("Top medios por reportes");
		$data['subtitle'] =  _("Cuáles son los diarios con más noticias que necesitan un re:medio");
		$data['description'] =  _("Listados de fuentes registrados en RE:media ordenados por número de fixes");
		$data['main_content'] = 'sources/list_sources';
		$data['page'] = $page;
		$data['sources'] = Report::find_by_sql('SELECT site, sum(karma) as karma, count(id) as news,
											sum(votes_count) as total_fixes FROM reports
											GROUP BY site ORDER BY total_fixes DESC
											LIMIT ' .  $this->pagination->per_page*($page-1) . ',' . $this->pagination->per_page);
		$data = get_sidebars_blocks($data);
		$this->load->view('includes/template', $data);
	}

	public function news($page=1) {
		$this->load->library('pagination');
		$config['base_url'] = site_url($this->router->reverseRoute('sources-news')) . '/pagina/';
		$config['first_url'] = site_url($this->router->reverseRoute('sources-news'));
		$config['uri_segment'] = 4;
		$results = Report::all(array('select' => 'distinct site'));
		$config['total_rows'] = count($results);
		$this->pagination->initialize($config);
		$data['pagination_links'] = $this->pagination->create_links();
		$data['page_title'] =  _("Top ranking de fuentes por descubrimientos");
		$data['title'] =  _("Top medios por descubrimientos");
		$data['subtitle'] =  _("Cuáles son los diarios con más noticias en RE:media");
		$data['description'] =  _("Listados de fuentes registrados en RE:media ordenados por número de descubrimientos");
		$data['main_content'] = 'sources/list_sources';
		$data['page'] = $page;
		$data['sources'] = Report::find_by_sql('SELECT site, sum(karma) as karma, count(id) as news,
											sum(votes_count) as total_fixes FROM reports
											GROUP BY site ORDER BY news DESC
											LIMIT ' .  $this->pagination->per_page*($page-1) . ',' . $this->pagination->per_page);
		$data = get_sidebars_blocks($data);
		$this->load->view('includes/template', $data);
	}

}
