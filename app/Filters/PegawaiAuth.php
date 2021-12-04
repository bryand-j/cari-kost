<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class PegawaiAuth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {

        if (!session()->get('Level')) {
            session()->setFlashdata('error','Silahkan Login Terlebih Dahulu');
        	return redirect()->to('./Login');
        }
        else if (session()->get('Level')!='Pegawai')
        {
            session()->setFlashdata('error','Silahkan Login Terlebih Dahulu');
        	return redirect()->to('./Login');
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        
    }
}