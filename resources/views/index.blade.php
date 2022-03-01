<!-- 
cái extend nó sẽ mang cái file file layouts/main.blade.php vào đây
<h1> Đầu</h1>
@yield('content')
<h1>Đuôi</h1>


Đây là nội dung nó mang vào
xong nó chạy đến cái section
cái section('ten_abc') nó sẽ thay thế nội dung cho yield('ten_abc') 
ông hiểu nghĩa 2 cái tên còn gì, nghĩa nó khác nhau r ukm

include là chỉ mang vào để đấy thôi, chứ không làm gì tiếp
còn cái extends này nó còn thêm bớt cái con

 -->
@extends('layouts.main')
<!-- // liên kết với file cha -->

<!-- ukm -->

@section('content') 
<!-- ông cứ hiểu là thằng section nó tìm cái thằng yield có tên giống nó rồi chuyền nội dụng bên trong section sang đấy -->


<!-- đây là nó đang tìm thằng cha tên là content 
xong nó bê cái nội dung bên trong thằng con này
đôi j c đc -->
<!-- content là cái tên ông đặt để liên kết 2 bên vs nhau, nó sẽ tìm ở file cha cái yield có tên là content rôi include nội dung trong cái section  -->

<div class="container">

  <div id="sponsor-header" class="banner-masthead hidden"></div>

  <!-- Latest episodes -->
  <section class="tray episode">
    <div class="tray-title">
      <span class="icon icon-cinema"></span><h5><a href="/tap-moi-nhat.html">Mới Cập Nhật <i class="icon icon-right"></i></a></h5>
    </div>
    <div class="tray-content index">
      <div class="tray-item">
        <a href="/detail.html">
          <img class="tray-item-thumbnail" src="https://picsum.photos/490/276" alt="Demo title">
          <div class="tray-item-description">
            <div class="tray-item-title">Demo title</div>
          </div>
          <div class="tray-item-audio">
            Vietsub
          </div>
        </a>
      </div>
      <div class="tray-item">
        <a href="/detail.html">
          <img class="tray-item-thumbnail" src="https://picsum.photos/490/276" alt="Demo title">
          <div class="tray-item-description">
            <div class="tray-item-title">Demo title</div>
          </div>
          <div class="tray-item-audio">
            Vietsub
          </div>
        </a>
      </div>
      <div class="tray-item">
        <a href="/detail.html">
          <img class="tray-item-thumbnail" src="https://picsum.photos/490/276" alt="Demo title">
          <div class="tray-item-description">
            <div class="tray-item-title">Demo title</div>
          </div>
          <div class="tray-item-audio">
            Vietsub
          </div>
        </a>
      </div>
      <div class="tray-item">
        <a href="/detail.html">
          <img class="tray-item-thumbnail" src="https://picsum.photos/490/276" alt="Demo title">
          <div class="tray-item-description">
            <div class="tray-item-title">Demo title</div>
          </div>
          <div class="tray-item-audio">
            Vietsub
          </div>
        </a>
      </div>
      <div class="tray-item">
        <a href="/detail.html">
          <img class="tray-item-thumbnail" src="https://picsum.photos/490/276" alt="Demo title">
          <div class="tray-item-description">
            <div class="tray-item-title">Demo title</div>
          </div>
          <div class="tray-item-audio">
            Vietsub
          </div>
        </a>
      </div>
      <div class="tray-item">
        <a href="/detail.html">
          <img class="tray-item-thumbnail" src="https://picsum.photos/490/276" alt="Demo title">
          <div class="tray-item-description">
            <div class="tray-item-title">Demo title</div>
          </div>
          <div class="tray-item-audio">
            Vietsub
          </div>
        </a>
      </div>
      <div class="tray-item">
        <a href="/detail.html">
          <img class="tray-item-thumbnail" src="https://picsum.photos/490/276" alt="Demo title">
          <div class="tray-item-description">
            <div class="tray-item-title">Demo title</div>
          </div>
          <div class="tray-item-audio">
            Vietsub
          </div>
        </a>
      </div>
      <div class="tray-item">
        <a href="/detail.html">
          <img class="tray-item-thumbnail" src="https://picsum.photos/490/276" alt="Demo title">
          <div class="tray-item-description">
            <div class="tray-item-title">Demo title</div>
          </div>
          <div class="tray-item-audio">
            Vietsub
          </div>
        </a>
      </div>
      <div class="tray-item">
        <a href="/detail.html">
          <img class="tray-item-thumbnail" src="https://picsum.photos/490/276" alt="Demo title">
          <div class="tray-item-description">
            <div class="tray-item-title">Demo title</div>
          </div>
          <div class="tray-item-audio">
            Vietsub
          </div>
        </a>
      </div>
      <div class="tray-item">
        <a href="/detail.html">
          <img class="tray-item-thumbnail" src="https://picsum.photos/490/276" alt="Demo title">
          <div class="tray-item-description">
            <div class="tray-item-title">Demo title</div>
          </div>
          <div class="tray-item-audio">
            Vietsub
          </div>
        </a>
      </div>
    </div>
  </section>
  <!-- END latest episodes -->

  <div id="sponsor-inpage" class="hidden"></div>

  <section class="tray cinema">
    <div class="tray-title">
      <span class="icon icon-cinema"></span><h5><a href="/phim-chieu-rap.html">Phim Chiếu Rạp <i class="icon icon-right"></i></a></h5>
    </div>
    <div class="tray-content">
      <div class="tray-item">
        <a href="/detail.html">
          <img class="tray-item-thumbnail" src="https://picsum.photos/490/277" alt="Demo tile">
          <div class="tray-item-description">
            <span class="tray-item-quality">FHD</span>
            <div class="tray-item-title">Demo tile</div>
            <div class="tray-item-meta-info">
              <div class="tray-film-views">1.1K xem</div>

              <div class="tray-film-likes">
                114 phút
              </div>
            </div>
          </div>

          <div class="tray-item-play-button">
            <i class="icon-play"></i>
          </div>

          <div class="tray-item-audio">
            Viet-Engsub
          </div>
        </a>
      </div>                                                                        
      <div class="tray-item">
        <a href="/detail.html">
          <img class="tray-item-thumbnail" src="https://picsum.photos/490/277" alt="Demo tile">
          <div class="tray-item-description">
            <span class="tray-item-quality">FHD</span>
            <div class="tray-item-title">Demo tile</div>
            <div class="tray-item-meta-info">
              <div class="tray-film-views">1.1K xem</div>

              <div class="tray-film-likes">
                114 phút
              </div>
            </div>
          </div>

          <div class="tray-item-play-button">
            <i class="icon-play"></i>
          </div>

          <div class="tray-item-audio">
            Viet-Engsub
          </div>
        </a>
      </div>
      <div class="tray-item">
        <a href="/detail.html">
          <img class="tray-item-thumbnail" src="https://picsum.photos/200/300" alt="Demo tile">
          <div class="tray-item-description">
            <span class="tray-item-quality">FHD</span>
            <div class="tray-item-title">Demo tile</div>
            <div class="tray-item-meta-info">
              <div class="tray-film-views">1.1K xem</div>

              <div class="tray-film-likes">
                114 phút
              </div>
            </div>
          </div>

          <div class="tray-item-play-button">
            <i class="icon-play"></i>
          </div>

          <div class="tray-item-audio">
            Viet-Engsub
          </div>
        </a>
      </div>
      <div class="tray-item">
        <a href="/detail.html">
          <img class="tray-item-thumbnail" src="https://picsum.photos/200/300" alt="Demo tile">
          <div class="tray-item-description">
            <span class="tray-item-quality">FHD</span>
            <div class="tray-item-title">Demo tile</div>
            <div class="tray-item-meta-info">
              <div class="tray-film-views">1.1K xem</div>

              <div class="tray-film-likes">
                114 phút
              </div>
            </div>
          </div>

          <div class="tray-item-play-button">
            <i class="icon-play"></i>
          </div>

          <div class="tray-item-audio">
            Viet-Engsub
          </div>
        </a>
      </div>
      <div class="tray-item">
        <a href="/detail.html">
          <img class="tray-item-thumbnail" src="https://picsum.photos/200/300" alt="Demo tile">
          <div class="tray-item-description">
            <span class="tray-item-quality">FHD</span>
            <div class="tray-item-title">Demo tile</div>
            <div class="tray-item-meta-info">
              <div class="tray-film-views">1.1K xem</div>

              <div class="tray-film-likes">
                114 phút
              </div>
            </div>
          </div>

          <div class="tray-item-play-button">
            <i class="icon-play"></i>
          </div>

          <div class="tray-item-audio">
            Viet-Engsub
          </div>
        </a>
      </div>
      <div class="tray-item">
        <a href="/detail.html">
          <img class="tray-item-thumbnail" src="https://picsum.photos/200/300" alt="Demo tile">
          <div class="tray-item-description">
            <span class="tray-item-quality">FHD</span>
            <div class="tray-item-title">Demo tile</div>
            <div class="tray-item-meta-info">
              <div class="tray-film-views">1.1K xem</div>

              <div class="tray-film-likes">
                114 phút
              </div>
            </div>
          </div>

          <div class="tray-item-play-button">
            <i class="icon-play"></i>
          </div>

          <div class="tray-item-audio">
            Viet-Engsub
          </div>
        </a>
      </div>                                          
    </div>
  </section>


  <section class="tray">
    <div class="tray-title">
      <span class="icon icon-cinema"></span><h5><a href="/phim-le">Phim Lẻ Mới <i class="icon icon-right"></i></a></h5>
    </div>
    <div class="tray-content">
     <div class="tray-item">
      <a href="/detail.html">
        <img class="tray-item-thumbnail" src="https://picsum.photos/200/300" alt="Demo title">
        <div class="tray-item-description">
          <span class="tray-item-quality">FHD</span>
          <div class="tray-item-title">Demo title</div>
          <div class="tray-item-meta-info">
            <div class="tray-film-views">1.1K xem</div>

            <div class="tray-film-likes">
              114 phút
            </div>
          </div>
        </div>

        <div class="tray-item-play-button">
          <i class="icon-play"></i>
        </div>

        <div class="tray-item-audio">
          Viet-Engsub
        </div>
      </a>
    </div>                                     
    <div class="tray-item">
      <a href="/detail.html">
        <img class="tray-item-thumbnail" src="https://picsum.photos/200/300" alt="Demo title">
        <div class="tray-item-description">
          <span class="tray-item-quality">FHD</span>
          <div class="tray-item-title">Demo title</div>
          <div class="tray-item-meta-info">
            <div class="tray-film-views">1.1K xem</div>

            <div class="tray-film-likes">
              114 phút
            </div>
          </div>
        </div>

        <div class="tray-item-play-button">
          <i class="icon-play"></i>
        </div>

        <div class="tray-item-audio">
          Viet-Engsub
        </div>
      </a>
    </div>
    <div class="tray-item">
      <a href="/detail.html">
        <img class="tray-item-thumbnail" src="https://picsum.photos/200/300" alt="Demo title">
        <div class="tray-item-description">
          <span class="tray-item-quality">FHD</span>
          <div class="tray-item-title">Demo title</div>
          <div class="tray-item-meta-info">
            <div class="tray-film-views">1.1K xem</div>

            <div class="tray-film-likes">
              114 phút
            </div>
          </div>
        </div>

        <div class="tray-item-play-button">
          <i class="icon-play"></i>
        </div>

        <div class="tray-item-audio">
          Viet-Engsub
        </div>
      </a>
    </div>
    <div class="tray-item">
      <a href="/detail.html">
        <img class="tray-item-thumbnail" src="https://picsum.photos/200/300" alt="Demo title">
        <div class="tray-item-description">
          <span class="tray-item-quality">FHD</span>
          <div class="tray-item-title">Demo title</div>
          <div class="tray-item-meta-info">
            <div class="tray-film-views">1.1K xem</div>

            <div class="tray-film-likes">
              114 phút
            </div>
          </div>
        </div>

        <div class="tray-item-play-button">
          <i class="icon-play"></i>
        </div>

        <div class="tray-item-audio">
          Viet-Engsub
        </div>
      </a>
    </div>
    <div class="tray-item">
      <a href="/detail.html">
        <img class="tray-item-thumbnail" src="https://picsum.photos/200/300" alt="Demo title">
        <div class="tray-item-description">
          <span class="tray-item-quality">FHD</span>
          <div class="tray-item-title">Demo title</div>
          <div class="tray-item-meta-info">
            <div class="tray-film-views">1.1K xem</div>

            <div class="tray-film-likes">
              114 phút
            </div>
          </div>
        </div>

        <div class="tray-item-play-button">
          <i class="icon-play"></i>
        </div>

        <div class="tray-item-audio">
          Viet-Engsub
        </div>
      </a>
    </div>
    <div class="tray-item">
      <a href="/detail.html">
        <img class="tray-item-thumbnail" src="https://picsum.photos/200/300" alt="Demo title">
        <div class="tray-item-description">
          <span class="tray-item-quality">FHD</span>
          <div class="tray-item-title">Demo title</div>
          <div class="tray-item-meta-info">
            <div class="tray-film-views">1.1K xem</div>

            <div class="tray-film-likes">
              114 phút
            </div>
          </div>
        </div>

        <div class="tray-item-play-button">
          <i class="icon-play"></i>
        </div>

        <div class="tray-item-audio">
          Viet-Engsub
        </div>
      </a>
    </div>
    <div class="tray-item">
      <a href="/detail.html">
        <img class="tray-item-thumbnail" src="https://picsum.photos/200/300" alt="Demo title">
        <div class="tray-item-description">
          <span class="tray-item-quality">FHD</span>
          <div class="tray-item-title">Demo title</div>
          <div class="tray-item-meta-info">
            <div class="tray-film-views">1.1K xem</div>

            <div class="tray-film-likes">
              114 phút
            </div>
          </div>
        </div>

        <div class="tray-item-play-button">
          <i class="icon-play"></i>
        </div>

        <div class="tray-item-audio">
          Viet-Engsub
        </div>
      </a>
    </div>
    <div class="tray-item">
      <a href="/detail.html">
        <img class="tray-item-thumbnail" src="https://picsum.photos/200/300" alt="Demo title">
        <div class="tray-item-description">
          <span class="tray-item-quality">FHD</span>
          <div class="tray-item-title">Demo title</div>
          <div class="tray-item-meta-info">
            <div class="tray-film-views">1.1K xem</div>

            <div class="tray-film-likes">
              114 phút
            </div>
          </div>
        </div>

        <div class="tray-item-play-button">
          <i class="icon-play"></i>
        </div>

        <div class="tray-item-audio">
          Viet-Engsub
        </div>
      </a>
    </div>
    <div class="tray-item">
      <a href="/detail.html">
        <img class="tray-item-thumbnail" src="https://picsum.photos/200/300" alt="Demo title">
        <div class="tray-item-description">
          <span class="tray-item-quality">FHD</span>
          <div class="tray-item-title">Demo title</div>
          <div class="tray-item-meta-info">
            <div class="tray-film-views">1.1K xem</div>

            <div class="tray-film-likes">
              114 phút
            </div>
          </div>
        </div>

        <div class="tray-item-play-button">
          <i class="icon-play"></i>
        </div>

        <div class="tray-item-audio">
          Viet-Engsub
        </div>
      </a>
    </div>
    <div class="tray-item">
      <a href="/detail.html">
        <img class="tray-item-thumbnail" src="https://picsum.photos/200/300" alt="Demo title">
        <div class="tray-item-description">
          <span class="tray-item-quality">FHD</span>
          <div class="tray-item-title">Demo title</div>
          <div class="tray-item-meta-info">
            <div class="tray-film-views">1.1K xem</div>

            <div class="tray-film-likes">
              114 phút
            </div>
          </div>
        </div>

        <div class="tray-item-play-button">
          <i class="icon-play"></i>
        </div>

        <div class="tray-item-audio">
          Viet-Engsub
        </div>
      </a>
    </div>
    <div class="tray-item">
      <a href="/detail.html">
        <img class="tray-item-thumbnail" src="https://picsum.photos/200/300" alt="Demo title">
        <div class="tray-item-description">
          <span class="tray-item-quality">FHD</span>
          <div class="tray-item-title">Demo title</div>
          <div class="tray-item-meta-info">
            <div class="tray-film-views">1.1K xem</div>

            <div class="tray-film-likes">
              114 phút
            </div>
          </div>
        </div>

        <div class="tray-item-play-button">
          <i class="icon-play"></i>
        </div>

        <div class="tray-item-audio">
          Viet-Engsub
        </div>
      </a>
    </div>
    <div class="tray-item">
      <a href="/detail.html">
        <img class="tray-item-thumbnail" src="https://picsum.photos/200/300" alt="Demo title">
        <div class="tray-item-description">
          <span class="tray-item-quality">FHD</span>
          <div class="tray-item-title">Demo title</div>
          <div class="tray-item-meta-info">
            <div class="tray-film-views">1.1K xem</div>

            <div class="tray-film-likes">
              114 phút
            </div>
          </div>
        </div>

        <div class="tray-item-play-button">
          <i class="icon-play"></i>
        </div>

        <div class="tray-item-audio">
          Viet-Engsub
        </div>
      </a>
    </div>                          
  </div>
</section>


</div> <!-- /container -->

<div class="modal-trailer">
  <div class="modal-trailer-content">
    <div class="modal-trailer-close"><i class="icon-close"></i></div>
    <div class="loading"></div>
    <div class="modal-player"></div>
    <div class="modal-info"></div>
  </div>
</div>

<div id="sponsor-catfish" class="hidden"></div>
<div id="sponsor-balloon" class="hidden"></div>
<div id="sponsor-preload" class="hidden"></div>


<div id="sponsor-others" class="hidden"></div>
<input id="country-code" type="hidden" name="code" value="5">



<!-- đây là cái section content -->

<!-- ông nhìn vị trí cái yield(content) nhé -->
@endsection
