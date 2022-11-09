@extends('layouts.main')

@section('container')
<!-- content -->
<div class="close row mt-5">
    <div class="gambar col-2 me-5 "><img src="img/2.jpg"></div>
    <div class="content col-4 shadow-sm p-3 mb-5 ms-5 bg-body rounded">
        <div class="rincian">
            <h2>Judul Buku</h2>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td>Penulis</td>
                        <td width="60%">initial D</td>
                    </tr>
                    <tr>
                        <td>kategori buku</td>
                        <td>novel</td>
                    </tr>
                    <tr>
                        <td>kota terbit</td>
                        <td>Semarang</td>
                    </tr>
                    <tr>
                        <td>penerbit</td>
                        <td>shueisha</td>
                    </tr>
                    <tr>
                        <td>tahun terbit</td>
                        <td>2016</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="container row mt-3">

    <div class="col-lg-8 content shadow-sm p-5 mb-5 bg-body rounded center">
        <h2 class="text-center m-2 pb-2"><b>Sinopsis Lengkap</b></h2>
        <article>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error, excepturi molestiae ducimus ex eos dolorum. Autem architecto tempora itaque, impedit error eius temporibus, ea similique, ipsam vero ducimus culpa dolorum exercitationem. Quas cupiditate fugit necessitatibus beatae voluptates dolor reprehenderit optio error eaque similique! Officia nesciunt earum inventore dolore veritatis minima iusto sunt incidunt harum, eveniet, excepturi quibusdam accusamus iure libero? Voluptas neque rerum praesentium quas, voluptates eligendi placeat aliquid optio cumque repellendus, tempora sapiente perferendis omnis, reiciendis possimus quam fuga maxime id nulla labore recusandae. Consequuntur tenetur quam assumenda, ducimus quia omnis accusantium sequi, mollitia tempore distinctio velit nulla minus commodi cum ratione voluptatem quidem. Ipsum eos reprehenderit autem quibusdam nobis fugiat id aliquid ipsam neque non. Tenetur, dignissimos accusamus.</article>
    </div>

</div>
<div class="container row">

    <div class="col-lg-8 content shadow-sm p-5 bg-body rounded center">
        <h2 class="text-center mb-5 pb-2"><b>Tentang Penulis</b></h2>
        <div class="row">
            <div class="col-lg-3">
                <img src="img/tzuyu.jpg" class="author img-fluid" alt="chou tzuyu">
            </div>
            <p class="col-lg-8">
                <strong>Chou tzuyu</strong> penulis best seller
                dengan buku buku bertajuk rahmatalil alamin dengan
                banyak sekali nuansarohani islam yang bisa membuat
                siapa saja menjadi mualaf
            </p>
        </div>
    </div>

</div>
<!-- end of content -->
@endsection