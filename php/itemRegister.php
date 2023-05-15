<?php
#$mysqli = mysqli_connect("example.com", "root", "password", "soonggle");
#$result = mysqli_query($mysqli, "SELECT 'Please do not use the deprecated mysql extension for new development. ' AS _msg FROM DUAL");
#$row = mysqli_fetch_assoc($result);
#echo $row['_msg'];

mysqli_connect("localhost", "root", "", "soonggle");
?>

<!doctype html>
<html lang="ko">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/src/origin.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>순대생을 위한 온라인 중고거래 플랫폼, 숭글</title>
    <style>
    @font-face {
    font-family: "순천향체";
    src: url(./rsc/soonchunhyang.ttf) format("truetype");
    }
    </style>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-sm navbar-light bg-white border-bottom fixed-top">
        <div class="container">
          <a class="navbar-brand fw-bold" href="../index.html" style="font-family: '순천향체'; color: #007681;">
            <i class="bi bi-bag-fill"></i>
            숭글
          </a>
          <form class="d-flex" action="php/itemSearch.php" method="post">
            <input class="form-control form-control-sm" type="search" placeholder="상품명을 검색하세요" aria-label="Search">
            <button class="btn" type="submit"><i class="bi bi-search"></i></button>
          </form>
        </div>
      </nav>
    </header>
    <section>
      <div class="container" style="height: 94vh; margin-top: 59px; padding-top: 30px;">
        <form action="php/itemRegisterOK.php" method="post">
          <label>카테고리</label>
          <p><select name="category" class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option selected>선택하세요</option>
            <option value="도서문구">도서문구</option>
            <option value="전자제품">전자제품</option>
            <option value="의류잡화">의류잡화</option>
            <option value="가공식품">가공식품</option>
            <option value="생활용품">생활용품</option>
            <option value="기타상품">기타상품</option>
          </select></p>
          <label>상품명</label>
          <p><input class="form-control" type="text" name="name"></p>
          <label>상품가격(₩)</label>
          <p><input class="form-control" type="text" name="price"></p>
          <label>상품상세</label>
          <p><textarea class="form-control" name="text"></textarea></p>
          <p>
            <input class="form-check-input" type="radio" name="exchange" value="1"> 교환가능
            <input class="form-check-input" type="radio" name="exchange" value="0"> 교환불가
          </p>
          <button class="btn btn-success" type="submit">등록하기
        </form>
      </div>
    </section>
    <footer>
      <div style="height: 15vh; background-color: #007681;">
        <nav class="navbar navbar-expand-sm">
          <div class="container-sm">
            <span class="navbar-text fw-light text-white">© Soonggle</span>
          </div>
        </nav>
      </div>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>