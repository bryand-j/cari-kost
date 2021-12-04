<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class LoginAuth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {

        if (session()->get('Level')=='Pegawai') {
        	return redirect()->to('/pegawai/Dashboard');
        }
        else if (session()->get('Level')=='Admin')
        {
        	return redirect()->to('/');
        }
        else if (session()->get('Level')=='Kontraktor')
        {
            return redirect()->to('/kontraktor/Dashboard');
        }
        else if (session()->get('Level')=='Konsultan')
        {
            return redirect()->to('/konsultan/Dashboard');
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        
    }
}