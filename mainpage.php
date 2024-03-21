<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./style.css" />
  </head>

  <body>
    <!-- 헤더 시작 -->
    <header>
      <ul>
        <li>
          <a href="./mainpage.php"><img src="./logo.png" alt="로고" width="150px" /></a>
        </li>
        <li><a href="./information">information</a></li>
        <li><a href="./statistics">statistics</a></li>
        <li><a href="./reservation">reservation</a></li>
        <li><a href="./goods">goods</a></li>
      </ul>
      <ul>
        <li><a href="./login">로그인</a></li>
        <li><a href="./signup">회원가입</a></li>
      </ul>
    </header>
    <!-- 헤더 끝 -->

    <!-- 컨테이너 시작 -->
    <div id="container">
      <!-- 슬라이드(비주얼 영역) 시작 -->
      <div class="slidebox">
        <input type="radio" name="slide" id="slide01" checked />
        <input type="radio" name="slide" id="slide02" />
        <input type="radio" name="slide" id="slide03" />
        <input type="radio" name="slide" id="slide04" />
        <ul class="slidelist">
          <li class="slideitem">
            <div>
              <a><img src="./assets/slide1.png" /></a>
            </div>
          </li>
          <li class="slideitem">
            <div>
              <a><img src="./assets/slide2.png" /></a>
            </div>
          </li>
          <li class="slideitem">
            <div>
              <a><img src="./assets/slide3.png" /></a>
            </div>
          </li>
          <li class="slideitem">
            <div>
              <a><img src="./assets/slide4.png" /></a>
            </div>
          </li>
        </ul>
      </div>
      <!-- 슬라이드(비주얼 영역) 끝 -->

      <!-- information 영역 시작 -->
      <div class="information_left">
        <p>Skills baseball park는 시민들의 복리증진을 위하여 설치되었으며,<br />시민들의 건강 및 복지향상과 시민들에게 편리한 시설물 이용을 위한 야구장입니다.</p>
        <img src="./선수제공파일/images/10.jpg" width="500px" alt="" />
      </div>
      <div class="information_left">
        <img src="./선수제공파일/images/14.jpg" width="500px" alt="" />
        <p>
          야구를 사랑하며 즐기는 생활체육인들이 모이는 곳<br />
          다양한 즐거움과 감동을 선사하는 곳<br /><br />
          <b style="font-size: 24px">Skills baseball park</b><br />
          <a href="./sub01.html" id="information_link">information (클릭 시 이동)</a>
        </p>
      </div>
      <!-- information 영역 끝 -->

      <!-- 금일 게임 현황 시작 -->
      <div id="today_game_status">
        <h1>금일 게임 현황</h1>
        <div class="wrap">
          <div id="tgs_left">
            <img src="./assets/TeamWeb.webp" alt="" />
            <p>5</p>
          </div>
          <div id="tgs_center">
            <p>:</p>
          </div>
          <div id="tgs_right">
            <img src="./assets/TeamDesign.webp" alt="" />
            <p>4</p>
          </div>
        </div>
      </div>
      <!-- 금일 게임 현황 끝 -->

      <!-- game schedule 영역 시작 -->
      <table id="game_schedule_table">
        <tr>
          <th>일</th>
          <th>월</th>
          <th>화</th>
          <th>수</th>
          <th>목</th>
          <th>금</th>
          <th>토</th>
        </tr>
        <tr>
          <td></td>
          <td>1</td>
          <td>2</td>
          <td>3</td>
          <td>4</td>
          <td>5</td>
          <td>6</td>
        </tr>
        <tr>
          <td>7</td>
          <td>8</td>
          <td>9</td>
          <td class="today">10</td>
          <td>11</td>
          <td>12</td>
          <td>13</td>
        </tr>
        <tr>
          <td>14</td>
          <td>15</td>
          <td>16</td>
          <td>17</td>
          <td>18</td>
          <td>19</td>
          <td class="have_game"><a href="#modal">20</a></td>
        </tr>
        <tr>
          <td>21</td>
          <td>22</td>
          <td>23</td>
          <td>24</td>
          <td>25</td>
          <td>26</td>
          <td>27</td>
        </tr>
        <tr>
          <td>28</td>
          <td>29</td>
          <td>30</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </table>
      <!-- game schedule 영역 끝 -->
      <!-- ranking 영역 시작 -->
      <div id="ranking">
        <div id="ranking_menu">
          <div id="night_league">
            <p>나이트리그</p>
            <ul>
              <li><a href="#night_league_pitcher">투수순위</a></li>
              <li><a href="#night_league_hitter">타자순위</a></li>
            </ul>
          </div>
          <div id="weekend_league">
            <p>주말리그</p>
            <ul>
              <li><a href="#weekend_league_pitcher">투수순위</a></li>
              <li><a href="#weekend_league_hitter">타자순위</a></li>
            </ul>
          </div>
          <div id="dawn_league">
            <p>새벽리그</p>
            <ul>
              <li><a href="#dawn_league_pitcher">투수순위</a></li>
              <li><a href="#dawn_league_hitter">타자순위</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div id="league_details">
        <div id="night_league_pitcher">
          <p>나이트리그 - 투수 순위</p>
          <ul>
            <li>1. 나일투</li>
            <li>2. 나이투</li>
            <li>3. 나삼투</li>
            <li>4. 나사투</li>
            <li>5. 나오투</li>
            <li>6. 나육투</li>
            <li>7. 나칠투</li>
          </ul>
        </div>
        <div id="night_league_hitter">
          <p>나이트리그 - 타자 순위</p>
          <ul>
            <li>1. 나일타</li>
            <li>2. 나이타</li>
            <li>3. 나삼타</li>
            <li>4. 나사타</li>
            <li>5. 나오타</li>
            <li>6. 나육타</li>
            <li>7. 나칠타</li>
          </ul>
        </div>

        <div id="weekend_league_pitcher">
          <p>주말리그 - 투수 순위</p>
          <ul>
            <li>1. 주일투</li>
            <li>2. 주이투</li>
            <li>3. 주삼투</li>
            <li>4. 주사투</li>
            <li>5. 주오투</li>
            <li>6. 주육투</li>
            <li>7. 주칠투</li>
          </ul>
        </div>
        <div id="weekend_league_hitter">
          <p>주말리그 - 타자 순위</p>
          <ul>
            <li>1. 주일타</li>
            <li>2. 주이타</li>
            <li>3. 주삼타</li>
            <li>4. 주사타</li>
            <li>5. 주오타</li>
            <li>6. 주육타</li>
            <li>7. 주칠타</li>
          </ul>
        </div>

        <div id="dawn_league_pitcher">
          <p>새벽리그 - 투수 순위</p>
          <ul>
            <li>1. 새일투</li>
            <li>2. 새이투</li>
            <li>3. 새삼투</li>
            <li>4. 새사투</li>
            <li>5. 새오투</li>
            <li>6. 새육투</li>
            <li>7. 새칠투</li>
          </ul>
        </div>
        <div id="dawn_league_hitter">
          <p>새벽리그 - 타자 순위</p>
          <ul>
            <li>1. 새일타</li>
            <li>2. 새이타</li>
            <li>3. 새삼타</li>
            <li>4. 새사타</li>
            <li>5. 새오타</li>
            <li>6. 새육타</li>
            <li>7. 새칠타</li>
          </ul>
        </div>
      </div>
      <div id="league_top">
        <div id="batting">
          <p><a href="#batting">타율 Top 5</a></p>
          <ul>
            <li>1. 일타율</li>
            <li>2. 이타율</li>
            <li>3. 삼타율</li>
            <li>4. 사타율</li>
            <li>5. 오타율</li>
          </ul>
        </div>

        <div id="homer">
          <p><a href="#homer">홈런 Top 5</a></p>
          <ul>
            <li>1. 일홈런</li>
            <li>2. 이홈런</li>
            <li>3. 삼홈런</li>
            <li>4. 사홈런</li>
            <li>5. 오홈런</li>
          </ul>
        </div>
        <div id="multiple_win">
          <p><a href="#multiple_win">다승 Top 5</a></p>
          <ul>
            <li>1. 일다승</li>
            <li>2. 이다승</li>
            <li>3. 삼다승</li>
            <li>4. 사다승</li>
            <li>5. 오다승</li>
          </ul>
        </div>
        <div id="earned_run_average">
          <p><a href="#earned_run_average">평균자책 Top 5</a></p>
          <ul>
            <li>1. 일평자</li>
            <li>2. 이평자</li>
            <li>3. 삼평자</li>
            <li>4. 사평자</li>
            <li>5. 오평자</li>
          </ul>
        </div>
        <div id="strikeout">
          <p><a href="#strikeout">탈삼진 Top 5</a></p>
          <ul>
            <li>1. 일삼진</li>
            <li>2. 이삼진</li>
            <li>3. 삼삼진</li>
            <li>4. 사삼진</li>
            <li>5. 오삼진</li>
          </ul>
        </div>
        <div id="save">
          <p><a href="#save">세이브 Top 5</a></p>
          <ul>
            <li>1. 일세이</li>
            <li>2. 이세이</li>
            <li>3. 삼세이</li>
            <li>4. 사세이</li>
            <li>5. 오세이</li>
          </ul>
        </div>
      </div>
      <!-- ranking 영역 끝 -->

      <!-- gallery 영역 시작 -->
      <div id="gallery">
        <div id="gallery1">
          <a href="#gallery1">이전</a>
          <div class="imgWhite"></div>
          <div class="img1"><p>1번 이미지<br><button>more</button></p></div>
          <div class="img2"><p>2번 이미지<br><button>more</button></p></div>
          <a href="#gallery2">다음</a>
        </div>
        <div id="gallery2">
          <a href="#gallery1">이전</a>
          <div class="img1"><p>1번 이미지<br><button>more</button></p></div>
          <div class="img2"><p>2번 이미지<br><button>more</button></p></div>
          <div class="img3"><p>3번 이미지<br><button>more</button></p></div>
          <a href="#gallery3">다음</a>
        </div>
        <div id="gallery3">
          <a href="#gallery2">이전</a>
          <div class="img2"><p>2번 이미지<br><button>more</button></p></div>
          <div class="img3"><p>3번 이미지<br><button>more</button></p></div>
          <div class="img4"><p>4번 이미지<br><button>more</button></p></div>
          <a href="#gallery4">다음</a>
        </div>
        <div id="gallery4">
          <a href="#gallery3">이전</a>
          <div class="img3"><p>3번 이미지<br><button>more</button></p></div>
          <div class="img4"><p>4번 이미지<br><button>more</button></p></div>
          <div class="img5"><p>5번 이미지<br><button>more</button></p></div>
          <a href="#gallery5">다음</a>
        </div>
        <div id="gallery5">
          <a href="#gallery4">이전</a>
          <div class="img4"><p>4번 이미지<br><button>more</button></p></div>
          <div class="img5"><p>5번 이미지<br><button>more</button></p></div>
          <div class="img6"><p>6번 이미지<br><button>more</button></p></div>
          <a href="#gallery6">다음</a>
        </div>
        <div id="gallery6">
          <a href="#gallery5">이전</a>
          <div class="img5"><p>5번 이미지<br><button>more</button></p></div>
          <div class="img6"><p>6번 이미지<br><button>more</button></p></div>
          <div class="img1"><p>1번 이미지<br><button>more</button></p></div>
          <a href="#gallery1">다음</a>
        </div>
      </div>
      <!-- gallery 영역 끝 -->
  
      <!-- goods 영역 시작 -->
      <div id="goods">
        <h1>Skills Baseball Park Goods Shop</h1>
        <div id="images">
          <div class="image"><img src="./선수제공파일/images/01.jpg" alt=""></div>
          <div class="image"><img src="./선수제공파일/images/01.jpg" alt=""></div>
          <div class="image"><img src="./선수제공파일/images/01.jpg" alt=""></div>
          <div class="image"><img src="./선수제공파일/images/01.jpg" alt=""></div>
        </div>
      </div>
      <!-- goods 영역 끝 -->

    </div>
    <!-- 컨테이너 끝 -->

    <!-- 모달 시작 -->
    <div id="modal">
      <div id="modal_container">
        <div id="modal_header">
          <h1>4월 20일</h1>
        </div>
        <hr />
        <div id="modal_body">
          <img src="./선수제공파일/images/03.jpg" alt="" width="200px">
          <p>아직 게임이 없습니다.</p>
        </div>
        <a href="#game_schedule_table"><button id="modal_close">닫기</button></a>
      </div>
    </div>
    <!-- 모달 끝 -->

    <!-- 푸터 시작 -->
    <footer>
      <ul>
        <li>
          <img src="./logo.png" alt="" width="200px;" />
        </li>
        <li>
          [Copyright]<br />
          Copyrightⓒ Skills baseball park. All rights reserved.<br />
          Call: 142-3677<br />
          Email: help@skillsbaseballpark.com<br />
          Address: (12345) 서울특별서 중구 중북로 71
        </li>
      </ul>
    </footer>
    <!-- 푸터 끝 -->
  </body>
</html>
