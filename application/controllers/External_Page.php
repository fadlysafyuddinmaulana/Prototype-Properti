<?php
defined('BASEPATH') or exit('No direct script access allowed');

class External_Page extends CI_Controller
{
    public function Index()
    {
        $data['title']          = 'Matahari Store';
        $data['content_title'] = 'Lorem Ipsum';
        $data['content_writer'] = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias nemo commodi eum! Nam laudantium iste enim consequuntur ut commodi at provident atque nihil quas incidunt reiciendis temporibus minima nulla cumque odio a quae ducimus explicabo, fuga rerum reprehenderit. Quasi veniam dolorum reprehenderit voluptatem consequuntur similique fugit nisi repudiandae natus fugiat. Tenetur, eveniet recusandae nihil dolorem possimus nemo facere veniam maiores deleniti optio eos fugit animi ipsam quasi corrupti esse temporibus aut quod asperiores cum! Porro sequi dicta aliquam soluta fugit blanditiis illum tenetur doloribus modi labore, vitae eaque asperiores veritatis!';

        $this->load->view('Template/Header', $data);
        $this->load->view('Template/Navbar', $data);
        $this->load->view('External-Page/Profile', $data);
        $this->load->view('Template/Footer');
    }

    public function Detail_Product_Rumah()
    {
        $data['title']          = 'Matahari Store';
        $data['content_title'] = 'Lorem Ipsum';
        $data['content_writer'] = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias nemo commodi eum! Nam laudantium iste enim consequuntur ut commodi at provident atque nihil quas incidunt reiciendis temporibus minima nulla cumque odio a quae ducimus explicabo, fuga rerum reprehenderit. Quasi veniam dolorum reprehenderit voluptatem consequuntur similique fugit nisi repudiandae natus fugiat. Tenetur, eveniet recusandae nihil dolorem possimus nemo facere veniam maiores deleniti optio eos fugit animi ipsam quasi corrupti esse temporibus aut quod asperiores cum! Porro sequi dicta aliquam soluta fugit blanditiis illum tenetur doloribus modi labore, vitae eaque asperiores veritatis!';

        $this->load->view('Template/Header', $data);
        $this->load->view('Template/Navbar', $data);
        $this->load->view('External-Page/Detail-Product-Rumah', $data);
        $this->load->view('Template/Footer');
    }

    public function Detail_Product_Tanah()
    {
        $data['title']          = 'Agaz Properti';
        $data['content_title'] = 'Lorem Ipsum';
        $data['content_writer'] = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias nemo commodi eum! Nam laudantium iste enim consequuntur ut commodi at provident atque nihil quas incidunt reiciendis temporibus minima nulla cumque odio a quae ducimus explicabo, fuga rerum reprehenderit. Quasi veniam dolorum reprehenderit voluptatem consequuntur similique fugit nisi repudiandae natus fugiat. Tenetur, eveniet recusandae nihil dolorem possimus nemo facere veniam maiores deleniti optio eos fugit animi ipsam quasi corrupti esse temporibus aut quod asperiores cum! Porro sequi dicta aliquam soluta fugit blanditiis illum tenetur doloribus modi labore, vitae eaque asperiores veritatis!';

        $this->load->view('Template/Header', $data);
        $this->load->view('Template/Navbar', $data);
        $this->load->view('External-Page/Detail-Product-Tanah', $data);
        $this->load->view('Template/Footer');
    }
}
