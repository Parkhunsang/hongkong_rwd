<? include_once $_SERVER["DOCUMENT_ROOT"]."/hongkong_rwd/inc/start.html" ?>
    <link rel="stylesheet" href="/hongkong_rwd/reservation/sub_css/subPage.css">
    <script src="/hongkong_rwd/reservation/sub_js/contents.js"></script>
    <title>Document</title>
       
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
<!-- 컨텐츠영역시작 -->
<!-- 컨텐츠(예약창)시작 -->
<div id="contents_wrap">
    <div id="small_direction_wrap">
        <section id="small_direction_bar">
            <h2 class="hidden">예약창</h2>
            <div class="small_direction">
                <h2>출발지</h2>
                <ul class="small_direction_bar_list">
                    <!-- <li><a href="#">홍콩, 홍콩</a></li>
                    <li><a href="#">부산, 대한민국</a></li>
                    <li><a href="#">제주, 대한민국</a></li>
                    <li><a href="#">인천, 대한민국</a></li>
                    <li><a href="#">다낭, 베트남</a></li>
                    <li><a href="#">하노이, 베트남</a></li>
                    <li><a href="#">푸꾸옥, 베트남</a></li>
                    <li><a href="#">후쿠오카, 일본</a></li>
                    <li><a href="#">히로시마, 일본</a></li>
                    <li><a href="#">가고시마, 일본</a></li>
                    <li><a href="#">나고야, 일본</a></li>
                    <li><a href="#">오키나와, 일본</a></li>
                    <li><a href="#">오사카, 일본</a></li>
                    <li><a href="#">센다이, 일본</a></li>
                    <li><a href="#">시즈오카, 일본</a></li>
                    <li><a href="#">타카마츠, 일본</a></li>
                    <li><a href="#">도쿄, 일본</a></li>
                    <li><a href="#">닝보, 중국</a></li>
                    <li><a href="#">베이징, 중국</a></li>
                    <li><a href="#">싼야, 중국</a></li>
                    <li><a href="#">화롄, 중국</a></li>
                    <li><a href="#">카오슝, 중국</a></li>
                    <li><a href="#">타이청, 중국</a></li>
                    <li><a href="#">타이베이, 중국</a></li>
                    <li><a href="#">방콕, 태국</a></li>
                    <li><a href="#">치앙마이, 태국</a></li>
                    <li><a href="#">푸켓, 태국</a></li>
                    <li><a href="#">페낭, 말레이시아</a></li>
                    <li><a href="#">클라크, 필리핀</a></li>
                    <li><a href="#">마닐라, 필리핀</a></li> -->
                </ul>
            </div>

            <div class="small_direction">
                <h2>도착지</h2>
                <a class="change_btn" href="#">
                    <img src="/hongkong_rwd/images/chang_btn.png" alt="출발지 도착지 바꾸기">
                </a>
                <ul class="small_direction_bar_list">
                    <!-- <li><a href="#">홍콩, 홍콩</a></li>
                    <li><a href="#">부산, 대한민국</a></li>
                    <li><a href="#">제주, 대한민국</a></li>
                    <li><a href="#">인천, 대한민국</a></li>
                    <li><a href="#">다낭, 베트남</a></li>
                    <li><a href="#">하노이, 베트남</a></li>
                    <li><a href="#">푸꾸옥, 베트남</a></li>
                    <li><a href="#">후쿠오카, 일본</a></li>
                    <li><a href="#">히로시마, 일본</a></li>
                    <li><a href="#">가고시마, 일본</a></li>
                    <li><a href="#">나고야, 일본</a></li>
                    <li><a href="#">오키나와, 일본</a></li>
                    <li><a href="#">오사카, 일본</a></li>
                    <li><a href="#">센다이, 일본</a></li>
                    <li><a href="#">시즈오카, 일본</a></li>
                    <li><a href="#">타카마츠, 일본</a></li>
                    <li><a href="#">도쿄, 일본</a></li>
                    <li><a href="#">닝보, 중국</a></li>
                    <li><a href="#">베이징, 중국</a></li>
                    <li><a href="#">싼야, 중국</a></li>
                    <li><a href="#">화롄, 중국</a></li>
                    <li><a href="#">카오슝, 중국</a></li>
                    <li><a href="#">타이청, 중국</a></li>
                    <li><a href="#">타이베이, 중국</a></li>
                    <li><a href="#">방콕, 태국</a></li>
                    <li><a href="#">치앙마이, 태국</a></li>
                    <li><a href="#">푸켓, 태국</a></li>
                    <li><a href="#">페낭, 말레이시아</a></li>
                    <li><a href="#">클라크, 필리핀</a></li>
                    <li><a href="#">마닐라, 필리핀</a></li> -->
                </ul>
            </div>
            <div class="small_direction">
                <h2>출발일</h2>
            </div>
            <div class="small_direction">
                <h2>도착일</h2>
            </div>
            <div class="small_direction">
                <h2>인원</h2>
            </div>
        </section>
    </div>
<!-- 컨텐츠(예약창)끝 -->
<!-- 컨텐츠(출발편)시작 -->
    <div class="reservation_wrap">
        <section class="start_date_list">
            <h2 class="contents_title">
                출발 편
            </h2>
            <p class="contents_text">
                서울(인천) -> 홍콩
            </p>
            
            <div class="date_select_wrap">
                <ul class="date_select_list departure">
                    <li>
                        <p class="date_text departure">04(월)</p>
                        <p class="date_price_text departure">KRW 32,100</p>
                    </li>
                    <li>
                        <p class="date_text">05(화)</p>
                        <p class="date_price_text">매진</p>
                    </li>
                    <li>
                        <p class="date_text">06(수)</p>
                        <p class="date_price_text">매진</p>
                    </li>
                    <li>
                        <p class="date_text">07(목)</p>
                        <p class="date_price_text">매진</p>
                    </li>
                    <li>
                        <p class="date_text">08(금)</p>
                        <p class="date_price_text">매진</p>
                    </li>
                    <li>
                        <p class="date_text">09(토)</p>
                        <p class="date_price_text">매진</p>
                    </li>
                    <li>
                        <p class="date_text">10(일)</p>
                        <p class="date_price_text">매진</p>
                    </li> 
                </ul>
            </div>

            <div id="departure" class="time_select_wrap">
                <div class="time_option_select">
                    <p class="promotion_text">프로모션</p>
                    <div class="time">
                        <div class="departure_time">
                            <p class="time_text">12:30</p>
                            <p class="place_text">ICN</p>
                        </div>
                        <div class="take_time">
                            <p class="take_time_text">4시간 5분</p>
                            <p class="plane_num_text">UO619</p>
                        </div>
                        <div class="arrival_time">
                            <p class="time_text">19:00</p>
                            <p class="place_text">HKG</p>
                        </div>
                    </div>
                    <div id="departure_price" class="price">
                        <p class="seat_text">일반석</p>
                        <p class="price_text">KRW 32,100</p>
                    </div>
                </div>

                <div id="departure_seat_option" class="seat_option_select">
                    <div class="seat_option">
                        <div class="up_box">
                            <p class="up_box_text">울트라 라이트</p>
                            <p class="up_box_price_text">KRW 44,300</p>
                        </div>
                       <div class="down_box">
                            <div class="charge_box">
                                <ul class="charge_list">
                                    <li><p class="charge_text">변경 수수료</p></li>
                                    <li><p class="charge_text">환불 수수료</p></li>
                                    <li><p class="charge_text">개인 휴대품</p></li>
                                </ul>
                            </div>
                            <div class="charge_price">
                                <ul class="charge_price_list">
                                    <li><p class="charge_price_text">최대 60,000원(편도)</p></li>
                                    <li><p class="charge_price_text">최대 40,000원(편도)</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="seat_option">
                        <div class="up_box">
                            <p class="up_box_text">라이트</p>
                            <p class="up_box_price_text">KRW 59,200</p>
                        </div>
                        <div class="down_box">
                            <div class="charge_box">
                                <ul class="charge_list">
                                    <li><p class="charge_text">변경 수수료</p></li>
                                    <li><p class="charge_text">환불 수수료</p></li>
                                    <li><p class="charge_text">개인 휴대품</p></li>
                                    <li class="inner_weight"><p class="charge_text">기내 수화물</p></li>
                                </ul>
                            </div>
                            <div class="charge_price">
                                <ul class="charge_price_list">
                                    <li><p class="charge_price_text">최대 60,000원(편도)</p></li>
                                    <li><p class="charge_price_text">최대 40,000원(편도)</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="seat_option">
                        <p class="promotion_second">추천상품</p>
                        <div class="up_box">
                            <p class="up_box_text">에센셜</p>
                            <p class="up_box_price_text">KRW 79,800</p>
                        </div>
                        <div class="down_box">
                            <div class="charge_box">
                                <ul class="charge_list">
                                    <li><p class="charge_text">변경 수수료</p></li>
                                    <li><p class="charge_text">환불 수수료</p></li>
                                    <li><p class="charge_text">개인 휴대품</p></li>
                                    <li class="weight"><p class="charge_text">위탁수화물(20KG)</p></li>
                                </ul>
                            </div>
                            <div class="charge_price">
                                <ul class="charge_price_list">
                                    <li><p class="charge_price_text">최대 60,000원(편도)</p></li>
                                    <li><p class="charge_price_text">최대 40,000원(편도)</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="seat_option">
                        <div class="up_box">
                            <p class="up_box_text">맥스</p>
                            <p class="up_box_price_text">KRW 128,800</p>
                        </div>
                        <div class="down_box">
                            <div class="charge_box">
                                <ul class="charge_list">
                                    <li><p class="charge_text">변경 수수료</p></li>
                                    <li><p class="charge_text">환불 수수료</p></li>
                                    <li><p class="charge_text">개인 휴대품</p></li>
                                    <li class="inner_weight"><p class="charge_text">기내 수화물</p></li>
                                    <li class="weight"><p class="charge_text">위탁수화물(20KG)</p></li>
                                </ul>
                            </div>
                            <div class="charge_price">
                                <ul class="charge_price_list">
                                    <li><p class="charge_price_text">최대 60,000원(편도)</p></li>
                                    <li><p class="charge_price_text">최대 40,000원(편도)</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="time_option_select">
                    <p class="promotion_text">프로모션</p>
                    <div class="time">
                        <div class="departure_time">
                            <p class="time_text">15:55</p>
                            <p class="place_text">ICN</p>
                        </div>
                        <div class="take_time">
                            <p class="take_time_text">4시간 5분</p>
                            <p class="plane_num_text">UO630</p>
                        </div>
                        <div class="arrival_time">
                            <p class="time_text">19:00</p>
                            <p class="place_text">HKG</p>
                        </div>
                    </div>
                    <div class="price">
                        <p class="seat_text">일반석</p>
                        <p class="price_text">매진</p>
                    </div>
                </div>

                <div class="time_option_select">
                    <p class="promotion_text">프로모션</p>
                    <div class="time">
                        <div class="departure_time">
                            <p class="time_text">21:50</p>
                            <p class="place_text">ICN</p>
                        </div>
                        <div class="take_time">
                            <p class="take_time_text">4시간 5분</p>
                            <p class="plane_num_text">UO678</p>
                        </div>
                        <div class="arrival_time">
                            <p class="time_text">00:55</p>
                            <p class="place_text">HKG</p>
                        </div>
                    </div>
                    <div class="price">
                        <p class="seat_text">일반석</p>
                        <p class="price_text">매진</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
<!-- 컨텐츠(출발편)끝 -->
<!-- 컨텐츠(도착편)시작 -->
    <div class="reservation_wrap">
        <section class="start_date_list">
            <h2 class="contents_title">
                도착편
            </h2>
            <p class="contents_text">
                홍콩 -> 서울(도착편)
            </p>
            <div class="date_select_wrap">
                <ul class="date_select_list arrival">
                    <li>
                        <p class="date_text arrival">05(화)</p>
                        <p class="date_price_text arrival">KRW 34,800</p>
                    </li>
                    <li>
                        <p class="date_text">06(수)</p>
                        <p class="date_price_text">매진</p>
                    </li>
                    <li>
                        <p class="date_text">07(목)</p>
                        <p class="date_price_text">매진</p>
                    </li>
                    <li>
                        <p class="date_text">08(금)</p>
                        <p class="date_price_text">매진</p>
                    </li>
                    <li>
                        <p class="date_text">09(토)</p>
                        <p class="date_price_text">매진</p>
                    </li>
                    <li>
                        <p class="date_text">10(일)</p>
                        <p class="date_price_text">매진</p>
                    </li>
                    <li>
                        <p class="date_text">11(월)</p>
                        <p class="date_price_text">매진</p>
                    </li> 
                </ul>
            </div>

            <div id="arrival" class="time_select_wrap">
                <div class="time_option_select">
                    <p class="promotion_text">프로모션</p>
                    <div class="time">
                        <div class="departure_time">
                            <p class="time_text">12:30</p>
                            <p class="place_text">ICN</p>
                        </div>
                        <div class="take_time">
                            <p class="take_time_text">4시간 5분</p>
                            <p class="place_text">UO619</p>
                        </div>
                        <div class="arrival_time">
                            <p class="time_text">19:00</p>
                            <p class="place_text">HKG</p>
                        </div>
                    </div>
                    <div id="arrival_price" class="price">
                        <p class="seat_text selected">일반석</p>
                        <p class="price_text selected">KRW 34,800</p>
                    </div>
                </div>

                <div id="arrival_seat_option" class="seat_option_select">
                    <div class="seat_option">
                        <div class="up_box">
                            <p class="up_box_text">울트라 라이트</p>
                            <p class="up_box_price_text">KRW 44,300</p>
                        </div>
                        <div class="down_box">
                            <div class="charge_box">
                                <ul class="charge_list">
                                    <li><p class="charge_text">변경 수수료</p></li>
                                    <li><p class="charge_text">환불 수수료</p></li>
                                    <li><p class="charge_text">개인 휴대품</p></li>
                                </ul>
                            </div>
                            <div class="charge_price">
                                <ul class="charge_price_list">
                                    <li><p class="charge_price_text">최대 60,000원(편도)</p></li>
                                    <li><p class="charge_price_text">최대 40,000원(편도)</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="seat_option">
                        <div class="up_box">
                            <p class="up_box_text">라이트</p>
                            <p class="up_box_price_text">KRW 59,200</p>
                        </div>
                        <div class="down_box">
                            <div class="charge_box">
                                <ul class="charge_list">
                                    <li><p class="charge_text">변경 수수료</p></li>
                                    <li><p class="charge_text">환불 수수료</p></li>
                                    <li><p class="charge_text">개인 휴대품</p></li>
                                    <li class="inner_weight"><p class="charge_text">기내 수화물</p></li>
                                </ul>
                            </div>
                            <div class="charge_price">
                                <ul class="charge_price_list">
                                    <li><p class="charge_price_text">최대 60,000원(편도)</p></li>
                                    <li><p class="charge_price_text">최대 40,000원(편도)</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="seat_option">
                        <p class="promotion_second">추천상품</p>
                        <div class="up_box selected">
                            <p class="up_box_text selected">에센셜</p>
                            <p class="up_box_price_text selected">KRW 79,800</p>
                        </div>
                        <div class="down_box">
                            <div class="charge_box">
                                <ul class="charge_list">
                                    <li><p class="charge_text">변경 수수료</p></li>
                                    <li><p class="charge_text">환불 수수료</p></li>
                                    <li><p class="charge_text">개인 휴대품</p></li>
                                    <li class="weight"><p class="charge_text">위탁수화물(20KG)</p></li>
                                </ul>
                            </div>
                            <div class="charge_price">
                                <ul class="charge_price_list">
                                    <li><p class="charge_price_text">최대 60,000원(편도)</p></li>
                                    <li><p class="charge_price_text">최대 40,000원(편도)</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="seat_option">
                        <div class="up_box">
                            <p class="up_box_text">맥스</p>
                            <p class="up_box_price_text">KRW 128,800</p>
                        </div>
                        <div class="down_box">
                            <div class="charge_box">
                                <ul class="charge_list">
                                    <li><p class="charge_text">변경 수수료</p></li>
                                    <li><p class="charge_text">환불 수수료</p></li>
                                    <li><p class="charge_text">개인 휴대품</p></li>
                                    <li class="inner_weight"><p class="charge_text">기내 수화물</p></li>
                                    <li class="weight"><p class="charge_text">위탁수화물(20KG)</p></li>
                                </ul>
                            </div>
                            <div class="charge_price">
                                <ul class="charge_price_list">
                                    <li><p class="charge_price_text">최대 60,000원(편도)</p></li>
                                    <li><p class="charge_price_text">최대 40,000원(편도)</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="time_option_select">
                    <p class="promotion_text">프로모션</p>
                    <div class="time">
                        <div class="departure_time">
                            <p class="time_text">15:55</p>
                            <p class="place_text">ICN</p>
                        </div>
                        <div class="take_time">
                            <p class="take_time_text">4시간 5분</p>
                            <p class="place_text">UO630</p>
                        </div>
                        <div class="arrival_time">
                            <p class="time_text">19:00</p>
                            <p class="place_text">HKG</p>
                        </div>
                    </div>
                    <div class="price">
                        <p class="seat_text">일반석</p>
                        <p class="price_text">매진</p>
                    </div>
                </div>

                <div class="time_option_select">
                    <p class="promotion_text">프로모션</p>
                    <div class="time">
                        <div class="departure_time">
                            <p class="time_text">21:50</p>
                            <p class="place_text">ICN</p>
                        </div>
                        <div class="take_time">
                            <p class="take_time_text">4시간 5분</p>
                            <p class="place_text">UO678</p>
                        </div>
                        <div class="arrival_time">
                            <p class="time_text">00:55</p>
                            <p class="place_text">HKG</p>
                        </div>
                    </div>
                    <div class="price">
                        <p class="seat_text">일반석</p>
                        <p class="price_text">매진</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div id="sum_wrap">
        <div id="sum">
            <div id="sum_text_wrap">
                <p id="sum_text">총액</p>
                <p id="sum_price">KRW 226,500원</p>
                <p id="next_page">다음 여정</p>
            </div>
        </div>
    </div>
</div>
<!-- 컨텐츠(도착편)끝 -->
<!-- 푸터시작 -->
<? include_once $_SERVER["DOCUMENT_ROOT"]."/hongkong_rwd/inc/footer.html" ?>
</body>
</html>