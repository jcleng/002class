<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Request;
use think\Exception;
use think\Cookie;

class Index extends Controller
{
    public function index()
    {
      	$this->fooder_page();
      	//swper背景路径*（数据库）
      	$slide_background = array(
      	    "/static/index/images/swiper/1.jpg",
      	    "/static/index/images/swiper/2.jpg"
      	);
      	$this->assign('slide_background', $slide_background);
        return $this->fetch();
    }
    public function admin()
    {
        return \think\Response::create(\think\Url::build('/admin'), 'redirect');
    }
    public function fooder_page(){
    	//备案等信息
    	$copyright = "©2017 127mi 计网络网站ZK1501 冷晶川";
    	$beian = "京ICP证xxxxx号 京公网安备xxxxxxxxxx号";
    	$beian_url = "http://";
    	$this->assign('copyright', $copyright);
    	$this->assign('beian', $beian);
    	$this->assign('beian_url', $beian_url);
    }
    public function bj_professional_news()
    {
    	$this->fooder_page();
      return $this->fetch();
    }
    public function bj_class_news()
    {
    	$this->fooder_page();
      return $this->fetch();
    }
    public function bj_contacts()
    {
    	$this->fooder_page();
      return $this->fetch();
    }
    public function bj_photos()
    {
    	$this->fooder_page();
      return $this->fetch();
    }
    public function bj_stars()
    {
    	$this->fooder_page();
      return $this->fetch();
    }
    public function bj_honor()
    {
    	$this->fooder_page();
      return $this->fetch();
    }
    public function zy_resources()
    {
    	$this->fooder_page();
      return $this->fetch();
    }
    public function zy_others()
    {
    	$this->fooder_page();
      return $this->fetch();
    }
    public function edit_contacts()
    {
    	$this->fooder_page();
      return $this->fetch();
    }
}
