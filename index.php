<? include_once $_SERVER["DOCUMENT_ROOT"]."/hongkong_rwd/inc/start.html" ?>
    <link rel="stylesheet" href="/hongkong_rwd/css/main.css">
    <script src="/hongkong_rwd/js/visual.js"></script>
    <script src="/hongkong_rwd/js/contents.js"></script>

    <script>
        let ua = window.navigator.userAgent.toLowerCase();
	    if(/iphone/.test(ua) || /android/.test(ua) || /opera/.test(ua) || /bada/.test(ua) || /ipad/.test(ua) || /windows ce/.test(ua)) {
	     window.location.href="http://daxi99.dothome.co.kr/hongkong_rwd/mobile";
    	}else{
    	  window.addEventListener('resize',()=>{
          let deviceWidth=window.innerWidth;
          if(deviceWidth<=768){
            window.location.href="http://daxi99.dothome.co.kr/hongkong_rwd/mobile"
          }   
        }) 
    	}
    </script>
    <title>홍콩익스프레스</title>
</head>
<body>
    <ul id="skipmenu_list">
        <li><a href="#mainmenu" class="hidden">메뉴바로가기</a></li>
        <li><a href="#search_bar_wrap" class="hidden">예약바로가기</a></li>
        <li><a href="#company_value_wrap" class="hidden">가치바로가기</a></li>
        <li><a href="#recommand_wrap" class="hidden">추천운항지바로가기</a></li>
        <li><a href="#popular_wrap" class="hidden">주요운항지바로가기</a></li>
        <li><a href="#partner_wrap" class="hidden">제휴사바로가기</a></li>
        <li><a href="#travel_wrap" class="hidden">여행준비바로가기</a></li>
        <li><a href="#information_wrap" class="hidden">뉴스레터바로가기</a></li>
        <li><a href="#footer_wrap" class="hidden">하단바로가기</a></li>
    </ul>
    <!-- 상단영역시작 -->
    <? include_once $_SERVER["DOCUMENT_ROOT"]."/hongkong_rwd/inc/header.html" ?>
    <!-- 상단영역끝 -->
    <!-- 비쥬얼영역시작 -->
<div id="visual_wrap">
    <ul id="visual_list">
        <li>
            <section class="visual_text">
                <h2 class="visual_text_title">
                    홍콩익스프레스로 꿈꾸는 여행을 현실로
                </h2>
                <p class="visual_section_text">
                    합리적인 가격과 빠르고 편리한 이동으로 아시아의 매력을 만끽하세요.
                </p>
            </section>
        </li>
        <li>
            <section class="visual_text">
                <h2 class="visual_text_title">
                    다양한 아시아 노선, 다양한 선택
                </h2>
                <p class="visual_section_text">
                    원하는 목적지로 빠르게 이동하고, 아시아를 한껏 즐겨보세요.
                </p> 
            </section>
        </li>
        <li>
            <section class="visual_text">
                <h2 class="visual_text_title">
                    편안하고 안전한 여행, 고객을 최우선으로
                </h2>
                <p class="visual_section_text">
                    안전한 비행과 세심한 서비스로 최상의 여행을 제공합니다.
                </p>
            </section>
        </li>
    </ul>
    <button id="next_btn"></button>
    <button id="prev_btn"></button>
</div>
<!-- 비주얼영역끝 -->
<!-- 컨텐츠영역시작 -->
<!-- 컨텐츠(예약창)시작 -->
<div id="contents_wrap">
    <div id="search_bar_wrap">
        <section id="search_bar">
            <h2 class="hidden">예약검색창</h2>           
            <ul id="bar_list">
                <li class="selected"><a href="#;">예약</a></li> 
                <li><a href="#;">예약조회</a></li>
                <li><a href="#;">체크인</a></li>
                <li><a href="#;">출도착 조회</a></li>
            </ul>

            <div id="panel_wrap">
                
            </div>
        </section>
    </div>
    <!-- 컨텐츠(예약창)끝 -->
     <!-- 컨텐츠(가치)시작 -->
    <div id="company_value_wrap">
        <section id="value">
            <h2 id="value_big_title">
                More Reasonable,<br>
                Better Service.
            </h2>
            <ul id="value_list">
                <li>
                    <p class="value_iamge">
                        <img src="/hongkong_rwd/images/value_down.png" alt="">
                    </p>
                    <p class="value_title">
                        합리적인 운임
                    </p>
                    <p class="value_text">
                        경쟁력 있는 가격으로 여행하세요.
                    </p>
                </li>
                <li>
                    <p class="value_iamge">
                        <img src="/hongkong_rwd/images/value_service.png" alt="">
                    </p>
                    <p class="value_title">
                        전문 서비스
                    </p>
                    <p class="value_text">
                        고객 맞춤형 서비스를 제공합니다.
                    </p>        
                </li>
                <li>
                    <p class="value_iamge">
                        <img src="/hongkong_rwd/images/value_fare.png" alt="">
                    </p>
                    <p class="value_title">
                        효율적인 운항
                    </p>
                    <p class="value_text">
                        폭넓은 운항횟수로 편리한 여행을 지원합니다.
                    </p>
                </li>
                <li>
                    <p class="value_iamge">
                        <img src="/hongkong_rwd/images/value_direction.png" alt="">
                    </p>
                    <p class="value_title">
                        다양한 노선
                    </p>
                    <p class="value_text">
                        다양한 취항지로 여행 선택의 폭을 넓혔습니다.
                    </p>
                </li>
            </ul>
        </section>
    </div>
    <!-- 컨텐츠(가치)끝 -->
    <!-- 컨텐츠(추천운항지)시작 -->
    <div id="recommand_wrap">
        <section id="recommand">
            <h2 class="contents_title">
                추천운항지
            </h2> 
            <p class="contents_sub">홍콩익스프레스만의 차별화된 운항지를 안내합니다.
            </p>
            <ul id="recommand_list">
                <li>
                    <div class="recommand_title">
                        <p class="schedule_icon">
                            <img src="/hongkong_rwd/images/schedule_icon.png" alt="운항 특징 설명"><!--백그라운드로 처리-->
                        </p>
                        <p>주 4회 운항</p>
                        <p>히로시마</p>
                        <p>(Hiroshima)</p>
                        <p>주요 관광지</p>
                        <p>원폭돔, 평화기념관,<br>오리즈루타워</p>
                        <button class="reservation_btn ">예약하기</button>
                    </div>
                    <div class="recommand_img"></div>
                </li>
                <li>
                    <div class="recommand_title">
                        <p class="schedule_icon">
                            <img src="/hongkong_rwd/images/schedule_icon.png" alt="운항 특징 설명"><!--백그라운드로 처리-->
                        </p>
                        <p>신규 운항</p>
                        <p>페낭</p>
                        <p>(Penang Island)</p>
                        <p>주요 관광지</p>
                        <p>조지타운, 페닝힐, 추제티</p>
                        <button class="reservation_btn">예약하기</button>
                    </div>
                    <div class="recommand_img"></div>
                </li>
                <li>
                    <div class="recommand_title">
                        <p class="schedule_icon">
                            <img src="/hongkong_rwd/images/schedule_icon.png" alt="운항 특징 설명"><!--백그라운드로 처리-->
                        </p>
                        <p>주 4회 운항</p>
                        <p>푸꾸옥</p>
                        <p>(Phu Quoc)</p>
                        <p>주요 관광지</p>
                        <p>두웅동, 그랜드월드 푸꾸옥,<br>단까우 야시장</p>
                        <button class="reservation_btn">예약하기</button>
                    </div>
                    <div class="recommand_img"></div>
                </li>
                <li>
                    <div class="recommand_title">
                        <p class="schedule_icon">
                            <img src="/hongkong_rwd/images/schedule_icon.png" alt="운항 특징 설명"><!--백그라운드로 처리-->
                        </p>
                        <p>주 4회 운항</p>
                        <p>돈므앙</p>
                        <p>(Don Mueang)</p>
                        <p>주요 관광지</p>
                        <p>왓 프라 깨우, 수쿰윗, 짜뚜짝<br>주말 시장</p>
                        <button class="reservation_btn">예약하기</button>
                    </div>
                    <div class="recommand_img"></div>
                </li>
                <li>
                    <div class="recommand_title">
                        <p class="schedule_icon">
                            <img src="/hongkong_rwd/images/schedule_icon.png" alt="운항 특징 설명"><!--백그라운드로 처리-->
                        </p>
                        <p>주 4회 운항</p>
                        <p>센다이</p>
                        <p>(Sendai)</p>
                        <p>주요 관광지</p>
                        <p>조젠지도리, 마츠시마 만,<br>아키우 온천</p>
                        <button class="reservation_btn">예약하기</button>
                    </div>
                    <div class="recommand_img"></div>
                </li>
                <li>
                    <div class="recommand_title">
                        <p class="schedule_icon">
                            <img src="/hongkong_rwd/images/schedule_icon.png" alt="운항 특징 설명"><!--백그라운드로 처리-->
                        </p>
                        <p>주 3회 운항</p>
                        <p>시즈오카</p>
                        <p>(Shizuoka)</p>
                        <p>주요 관광지</p>
                        <p>슨푸 성, 조가사키 해안,<br>오이가와</p>
                        <button class="reservation_btn">예약하기</button>
                    </div>
                    <div class="recommand_img"></div>
                </li> 
            </ul>
            <button id="prev_slide_btn">
            </button>
            <button id="next_slide_btn">
            </button>
        </section>
    </div>
<!-- 컨텐츠(추천운항지)끝 -->
<!-- 컨텐츠(주요운항지)시작 -->
    <div id="popular_wrap">
        <section id="popular">
            <h2 class="contents_title">
                주요운항지
            </h2> 
            <p class="contents_sub">홍콩익스프레스의 인기있는 운항지를 안내합니다.</p>
            <ul id="popular_list">
                <li class="selected">
                    <div class="popular_img"></div>
                    <div class="popular_text_box selected">
                        <p class="text_box_title">방콕</p>
                        <p class="text_box_date">2024년 11월 21일 - 2024년 12월 05일</p>
                        <p class="text_box_departure">출발지: 홍콩</p>
                        <p class="text_box_price">가격: 322,000원</p>
                    </div>
                    <a class="show_next_place_icon selected" href="#;"><img src="/hongkong_rwd/images/show_next_place_icon.png" alt="다음 운항지 보기"></a><!--백그라운드로 처리-->
                </li>
                <li>
                    <div class="popular_img"></div>
                    <div class="popular_text_box">
                        <p class="text_box_title">필리핀</p>
                        <p class="text_box_date">2024년 11월 21일 - 2024년 12월 05일</p>
                        <p class="text_box_departure">출발지: 홍콩</p>
                        <p class="text_box_price">가격: 285,000</p>
                    </div>
                    <a class="show_next_place_icon" href="#;"><img src="/hongkong_rwd/images/show_next_place_icon.png" alt="다음 운항지 보기"></a><!--백그라운드로 처리-->
                </li>
                <li>
                    <div class="popular_img"></div>
                    <div class="popular_text_box">
                        <p class="text_box_title">마닐라</p>
                        <p class="text_box_date">2024년 11월 21일 - 2024년 12월 05일</p>
                        <p class="text_box_departure">출발지: 홍콩</p>
                        <p class="text_box_price">가격: 302,000</p>
                    </div>
                    <a class="show_next_place_icon" href="#;"><img src="/hongkong_rwd/images/show_next_place_icon.png" alt="다음 운항지 보기 버튼"></a><!--백그라운드로 처리-->
                </li>
            </ul>
            <a id="show_more_icon" href="#;"><img src="/hongkong_rwd/images/show_more_icon.png" alt="여러 운항지 더 보기"></a><!--백그라운드로 처리-->
        </section>
    </div>
<!-- 컨텐츠(주요운항지)끝 -->
<!-- 컨텐츠(파트너)시작 -->
    <div id="partner_wrap">
        <section id="partner">
            <h2 class="hidden">제휴사 소개</h2>
            <div id="partner_explain_box">
                <p id="partner_big_title">
                    SMART TRAVEL : <span class="partner_purple">PARTNER</span>
                </p>
                <p id="partner_explain">
                    다양한 파트너와의 협력을 통해 제공하는 혜택과 서비스를 소개합니다.<br>
                    항공사, 호텔, 렌터카 업체 등과의 제휴를 통해 고객에게 특별 할인, 원스톱 예약 서비스, 포인트 적립 등 다양한 옵션을 제공합니다.
                </p>
            </div>
            <div id="partner_box">
                <ul id="partner_list">
                    <li>
                        <a href="#;">
                            <p class="partner_title"><span class="partner_color">A</span>goda</p>
                            <p class="partner_text">최대 75%할인으로<br>여행의 편리함을 누리세요!</p>
                            <p class="partner_img"><img src="/hongkong_rwd/images/agoda_img.png" alt="">
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="#;">
                            <p class="partner_title"><span class="partner_color">K</span>lock</p>
                            <p class="partner_text">최대 50%할인으로<br>즐거운 액티비티를 체험하세요!</p>
                            <p class="partner_img"><img src="/hongkong_rwd/images/klock_img.png" alt=""></p>
                            <p class="logo_connection">
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="#;">
                            <p class="partner_title"><span class="partner_color">R</span>entalcars</p>
                            <p class="partner_text">단독 특가로 안전한 여행을<br> 
                            즐기세요!</p>
                            <p class="partner_img"><img src="/hongkong_rwd/images/rentalcars_img.png" alt=""></p>
                            <p class="logo_connection">
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="#;">
                            <p class="partner_title"><span class="partner_color">S</span>Pexpress</p>
                            <p class="partner_text">공항 수하물 배달 서비스로<br>
                            번거로움 없이 여행을 즐기세요!</p>
                            <p class="partner_img"><img src="/hongkong_rwd/images/spexpress_img.png" alt=""></p>
                            <p class="logo_connection">
                            </p>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <!-- 컨텐츠(파트너)끝 -->
    <!-- 컨텐츠(여행준비)시작 -->
    <div id="travel_wrap">
        <section id="travel">
            <h2 class="contents_title">여행 준비</h2>
            <p class="contents_sub">여행의 완성을 위해 준비하세요</p>
                <div id="travel_box">
                    <div id="travel_text_wrap">
                            <p id="travel_title">
                                완벽한 여행 준비하기
                            </p>
                            <p id="travel_text">
                                고객이 여행 준비를 철저히 할 수 있도록 모든 필요한 정보를 한곳에 모아 두었습니다. 항공편 예약, 여행 필수품, 체크인 절차 등 다양한 내용을 통해 승객들이 보다 편리하게 여행 준비를 할 수 있도록 돕습니다. 
                            </p>
                    </div>
                    <div id="travel_img_box">
                        <p id="travel_img">
                        </p>
                    </div>
                </div>
                
                <div id="travel_list_box">
                    <ul id="travel_list">
                        <li>
                            <a href="#;">
                                <p class="travel_list_title">Notice</p>
                                <p class="travel_list_img">
                                    <img src="/hongkong_rwd/images/megaphone_icon.png" alt="공지사항 안내">
                                </p> 
                                <p class="travel_list_text">비행 전, 필수 공지사항을 반드시 확인하여<br> 안전하고 원활한 여행을 준비하세요.</p> 
                            </a>
                        </li>
                        <li>
                            <a href="#;">
                                <p class="travel_list_title">Discount</p>
                                <p class="travel_list_img"><img src="/hongkong_rwd/images/graph_bar_icon.png" alt="위탁수하물 추가 할인"></p> 
                                <p class="travel_list_text">지금 위탁수하물을 추가해서 최대<br> 48% 할인 혜택을 받아보세요.</p> 
                            </a>
                        </li>
                        <li>
                            <a href="#;">
                                <p class="travel_list_title">Guide</p>
                                <p class="travel_list_img"><img src="/hongkong_rwd/images/gramophone_icon.png" alt="가이드 안내"></p> 
                                <p class="travel_list_text"> 풍부한 여행 가이드를 통해 새로운<br> 영감을 받아보세요.</p> 
                            </a>
                        </li>
                        <li>
                            <a href="#;">
                                <p class="travel_list_title">Discount</p>
                                <p class="travel_list_img"><img src="/hongkong_rwd/images/discount_icon.png" alt="사전 좌석 구매 혜택"></p> 
                                <p class="travel_list_text">사전 좌석 구매를 통해 최대<br> 60% 할인 혜택을 누리세요.</p>
                            </a>
                        </li>
                    </ul>
                </div>
        </section>
    </div>
<!-- 컨텐츠(여행준비)끝 -->    
<!-- 컨텐츠(뉴스레터)시작 -->
    <div id="information_wrap">
        <section id="information">
            <h2 class="contents_title">뉴스레터</h2>
            <p class="contents_sub">홍콩익스프레스만의 특가를 놓치지 마세요!</p>
            <div id="information_text_box">
                <p id="information_title">
                    여러 운항지를  특별한  가격으로  만나보세요!
                </p>
                <p id="information_text">
                    홍콩익스프레스의 독점 혜택으로 최고의 여행 경험을 만끽하세요.<br>
                    구독하시면 최신 할인 정보와 특별한 소식을 가장 먼저 받아보실 수 있습니다!
                </p>
                <div id="email_bar">
                    <a href="#;">
                        <p id="email_text">이메일 입력란</p>
                    </a>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- 컨텐츠(정보제공)끝 -->
<!-- 푸터시작 -->
<? include_once $_SERVER["DOCUMENT_ROOT"]."/hongkong_rwd/inc/footer.html" ?>
</body>
</html>