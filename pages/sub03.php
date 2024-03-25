<?php
    //if(!isset($_SESSION["user_id"])) {
        //echo "<script>alert('로그인 후 이용하실 수 있습니다.'); location.href = './login';</script>";
      //}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./선수제공파일/bootstrap-5.2.0-dist/css/bootstrep.css">
</head>
<style>
    /* 화면 전체를 덮는 레이어 스타일 */

.modal-backdrop {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgb(128, 128, 128); /* 투명한 회색 */
    z-index: 1;
}

/* 모달창 스타일 */
.modal-content {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 20px;
    z-index: 2;
    /* 추가적인 디자인 요소 */
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
</style>
<body>
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
          <td onclick="showModal(this)">1</td>
          <td onclick="showModal(this)">2</td>
          <td onclick="showModal(this)">3</td>
          <td onclick="showModal(this)">4</td>
          <td onclick="showModal(this)">5</td>
          <td onclick="showModal(this)">6</td>
        </tr>
        <tr>
          <td onclick="showModal(this)">7</td>
          <td onclick="showModal(this)">8</td>
          <td onclick="showModal(this)">9</td>
          <td onclick="showModal(this)">10</td>
          <td onclick="showModal(this)">11</td>
          <td onclick="showModal(this)">12</td>
          <td onclick="showModal(this)">13</td>
        </tr>
        <tr>
          <td onclick="showModal(this)">14</td>
          <td onclick="showModal(this)">15</td>
          <td onclick="showModal(this)">16</td>
          <td onclick="showModal(this)">17</td>
          <td onclick="showModal(this)">18</td>
          <td onclick="showModal(this)">19</td>
          <td onclick="showModal(this)">20</td>
        </tr>
        <tr>
          <td onclick="showModal(this)">21</td>
          <td onclick="showModal(this)">22</td>
          <td onclick="showModal(this)">23</td>
          <td onclick="showModal(this)">24</td>
          <td onclick="showModal(this)">25</td>
          <td onclick="showModal(this)">26</td>
          <td onclick="showModal(this)">27</td>
        </tr>
        <tr>
          <td onclick="showModal(this)">28</td>
          <td onclick="showModal(this)">29</td>
          <td onclick="showModal(this)">30</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </table>

      
    <div class="modal fade" id="reservationModal" tabindex="-1" aria-labelledby="reservationModalLabel" aria-hidden="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLiveLabel">예약하기</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 id="position">리그 :</h5>
                    <h5 id="price">금액 :</h5>
                    <br>
                    <h5>리그선택</h5>
                    <div class="input-group mb-3">
                        <input type="radio" id="night_league" class="form-control" placeholder="리그선택" aria-label="리그" 
                        aria-describedby="basic-addon1" value="night">나이트리그
                    </div>
                    <div class="input-group mb-3">
                        <input type="radio" id="moning_league" class="form-control" placeholder="리그선택" aria-label="리그" 
                        aria-describedby="basic-addon1" value="moning" onclick="monig_leg()">새벽리그
                    </div>
                    <div class="input-group mb-3">
                        <input type="radio" id="red_league" class="form-control" placeholder="리그선택" aria-label="리그" 
                        aria-describedby="basic-addon1" value="redday">주말리그 
                    </div>
                    <br>
                    <h5>사용인원</h5>
                    <div class="input-group mb-3">
                        <input type="texts" id="choice_leg" class="form-control" placeholder="사용인원" aria-label="사용인원" 
                        aria-describedby="basic-addon1" value="people">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="clickHideModal(this)" >닫기</button>
                        <button type="button" class="btn btn-primary">예약하기</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


<script src="./script.js"></script>
<script>
    
</script>
</html>