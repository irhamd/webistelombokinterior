<div>
    <div class="container">
        <br><br>
        <div class="titlepage">
            <h2> <span class="black_bg">Galery </span> Desain</h2>
            <br>
            <p>Berikut adalah koleksi design-design ILO </p>
        </div>
        <article class="flow">
            <div class="team">
                <ul class="auto-grid" role="list">
                    @foreach ($desain as $item)
                        <li>
                            <a href="/detailproduk?post_desain={{ $item->id }}" target="_blank"
                                class="profile">
                                <p>
                                    {{ $item->deskripsi }}
                                    <div style="display: flex">
                                        <p> <i class="fa fa-eye" style="color: rgb(83, 63, 12)"></i> {{ $item->view }}
                                        </p>
                                        <p> &nbsp;</p>
                                        <p> <i class="fa fa-comments" style="color: rgb(83, 63, 12)"></i>  {{ $item->komentar }}
                                        </p>
                                    </div>
                                </p>

                                <h2 class="profile__name">{{ $item->namaproduk }} </h2>
                                <img alt="Anita Simmons" src="/post/upload/{{ $item->gambar }}" />
                            </a>
                        </li>
                    @endforeach

                </ul>
            </div>
        </article>
    </div>
</div>
