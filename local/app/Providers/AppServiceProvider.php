<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Kategori;
use App\Desa;
use App\Event;
use App\Artikel;
use App\Kontak;
use DateTime;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

        view()->composer('template_client', function($view) {
           $kategori_template = Kategori::orderBy('nama_kategori', 'asc')->get();
           $copyright = Desa::where('id',1)->first();
           $event_template = Event::where('status','aktif')->paginate(5);
           $galeri_template = Artikel::orderBy('id', 'desc')->paginate(6);
           $date_template = new DateTime();
           // $status_template = '';
           $event_nonaktif = Event::where('tanggal_event',$date_template->format('Y-m-d'))->update(['status' => 'tidak aktif']);;

           $view->with('kategori_template', $kategori_template);
           $view->with('copyright', $copyright);
           $view->with('event_template', $event_template);
           $view->with('galeri_template', $galeri_template);
           // $view->with('date_template', $date_template);
        });

        view()->composer('template', function($view) {
           $kategori_template = Kategori::orderBy('nama_kategori', 'asc')->get();
           $copyright = Desa::where('id',1)->first();
           $event_template = Event::where('status','aktif')->paginate(5);
           $galeri_template = Artikel::orderBy('id', 'desc')->paginate(6);
           $kontak_template = Kontak::where('id',1)->first();

           $view->with('kategori_template', $kategori_template);
           $view->with('copyright', $copyright);
           $view->with('event_template', $event_template);
           $view->with('galeri_template', $galeri_template);
           $view->with('kontak_template', $kontak_template);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
