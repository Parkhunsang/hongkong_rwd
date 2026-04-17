<!-- 스타트영역시작 -->
<? include_once $_SERVER["DOCUMENT_ROOT"]."/hongkong_rwd/inc/start.html" ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/hongkong_rwd/country/country_css/hiroshima.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="/hongkong_rwd/country/country_js/contents.js"></script>
    <title>히로시마</title>
    <style>
    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      display: flex;
      flex-direction:column;
      justify-content:space-between;
      align-items: center;
    }

    .swiper-slide img {
      object-fit: cover;
    }

    .swiper-pagination-bullet-active{
        background:#702B91;
    }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', ()=>{
            var swiper = new Swiper(".mySwiper", {
                spaceBetween: 30,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                });
        })
    </script>
</head>
<body>
    <ul id="skipmenu_list">
        <li><a href="#mainmenu" class="hidden">메뉴바로가기</a></li>
        <li><a href="#;" class="hidden">예약바로가기</a></li>
        <li><a href="#;" class="hidden">뉴스레터바로가기</a></li>
        <li><a href="#footer_wrap" class="hidden">하단바로가기</a></li>
    </ul>
<!-- 상단영역시작 -->
<? include_once $_SERVER["DOCUMENT_ROOT"]."/hongkong_rwd/inc/header.html" ?>
<!-- 상단영역끝 -->
<!-- 경로보기시작 -->
<div id="contents_wrap">
    <div id="route_wrap">
        <section id="route">
            <h2 class="hidden">운항정보</h2>
            <div id="route_utility">
                <button id="home"></button>
                <div id="route_text_wrap">
                    <a href="#;">운항정보
                        <span class="more_icon"></span>
                    </a>
                    <a href="#;">일본
                        <span class="more_icon"></span>
                    </a>
                    <div id="route_list_wrap">
                        <ul id="route_list">
                            <li><a href="#'">후쿠오카</a></li>
                            <li><a href="#'">히로시마</a></li>
                            <li><a href="#'">가고시마</a></li>
                            <li><a href="#'">나고야</a></li>
                            <li><a href="#'">오키나와</a></li>
                            <li><a href="#'">오사카</a></li>
                            <li><a href="#'">센다이</a></li>
                            <li><a href="#'">시즈오카</a></li>
                            <li><a href="#'">타카마츠</a></li>
                            <li><a href="#'">도쿄</a></li>
                        </ul>
                        <span class="more_icon"></span>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div id="route_img_box"></div>
    <div id="destination_wrap">
        <section id="destination">
            <h2 id="destination_title">히로시마<br>(Hiroshima)</h2>

            <div id="destination_explain_wrap">
                <div id="destination_explain_text_wrap">
                    <p id="destination_explain_title">평화의 상징 : 히로시마</p>
                    <p class="destination_explain_text">원자탄이 최초로 투하된 지점으로 가장 잘 기억되는 히로시마는 역사적으로 가장 의미 깊은 장소이며, 평화 기념 공원은 이곳에 벌어진 전쟁의 상흔을 알아보려면 반드시 방문해야 할 장소입니다.</p>
                    <p class="destination_explain_text">만을 끼고 있으며 히로시마는 뛰어난 복원력을 보여주듯 1945년 지구를 뒤흔드는 사건이 발생한 후 빠르게 회복했고, 오늘날 일본의 다른 현대적 도시와 마찬가지로 활기찬 생활상이 가득합니다. 도시의 경관은 세계 문화유산으로 선정된 신사, 사원, 평화로운 수변 공원 및 정원, 수많은 박물관, 쇼핑 및 식당가, 아름다운 산을 바라보며 쉴 수 있는 인근의 온천으로 방문객들을 매료합니다.</p>
                    <p class="destination_explain_text">일년 내내 행사와 축제도 열려 방문객들이 계절 축제에 참여하며 즐거움을 느낄 수 있습니다. 인기 있는 연례 행사로는 봄철 꽃과 벚꽃 축제, 가을철 화려한 단풍 구경 등이 있습니다. 그리고 일본에서 가장 유명한 술을 즐기고 싶다면 매년 10월 사이조 지역에서 개최되는 사케 축제를 놓치지 마십시오. 히로시마에서 가장 유명한 음식 중 하나인 굴이나 인기만점 쓰케멘 국수를 꼭 맛보세요.</p>
                </div>
                <div id="destination_img_box"></div>
            </div>

            <div id="highlight">
                <h2 id="highlight_title">하이라이트</h2>
                <div id="highlight_explain_wrap">
                    <div class="highlight_explain">
                        <span class="check_icon"></span>
                        <p class="highlight_explain_text">수많은 자전거 전용도로 위를 달리며 도시와 인근 섬들의 아름다운 경치를 만나보세요. 해안 지역과 섬들이 긴 교량으로 연결되어 자전거를 타고 쉽게 돌아다닐 수 있습니다.</p>
                    </div>
                    <div class="highlight_explain">
                        <span class="check_icon"></span>
                        <p class="highlight_explain_text">평화기념공원과 슛케이엔 정원은 히로시마에서 꼭 들러야 할 공원입니다. 평화기념공원은 박물관과 히로시마 원폭의 이야기를 말해주는 많은 역사적 구조물과 랜드마크가 있습니다. </p>
                    </div>
                    <div class="highlight_explain">
                        <span class="check_icon"></span>
                        <p class="highlight_explain_text">히로시마성은 1945년 공습 이후 1958년에 재건되었으며 오늘날 벚꽃 축제 시즌에 가장 인기 있는 장소입니다. 정교하게 건축된 이 5층짜리 성곽은 경사진 지붕과 일본의 아기자기한 디자인이 특징입니다.</p>
                    </div>
                </div>
            </div>

            <div class="swiper mySwiper">
                <ul id="highlight_images_list" class="swiper-wrapper">
                    <li class="swiper-slide">
                        <img src="/hongkong_rwd/country/country_images/peace_memorial_hall.png" alt="평화기념공원관설명">
                        <p class="highlight_text">&#91;사진1. 원폭 당시 사망자들이 입었던 옷가지. 평화기념공원관&#93;</p>
                    </li>
                    <li class="swiper-slide">
                        <img src="/hongkong_rwd/country/country_images/ohama_beach.png" alt="인노시마섬 오하마 해수욕장설명">
                        <p class="highlight_text">&#91;사진2. 인노시마섬의 해적들의 모습을 재현한 인노시마 불의 축제 모습.인노시마섬 오하마 해수욕장&#93;</p>
                    </li>
                    <li class="swiper-slide">
                        <img src="/hongkong_rwd/country/country_images/hiroshima_castle.png" alt="가미야초히가시 히로시마성설명">
                        <p class="highlight_text">&#91;사진3. 히로시마 원폭 당시 무너진 히로시마성을 고대 건축기술로 완벽히 재현하여 재건축한 히로시마성의 모습. 가미야초히가시&#93;</p>
                    </li>
                    <li class="swiper-slide">
                        <img src="/hongkong_rwd/country/country_images/digital_art_street.png" alt="마리호 디지털 아트 거리 설명">
                        <p class="highlight_text">&#91;사진4. 일본 내 최장거리 130M의 산책거리. 마리호 디지털 아트 거리&#93;</p>
                    </li>
                    <li class="swiper-slide">
                        <img src="/hongkong_rwd/country/country_images/ariyayama_img.png" alt="아리야야마 운해 설명">
                        <p class="highlight_text">&#91;사진5. 이른 아침 안개가 만드는 운해가 장관인 아리야야마의 모습. 아리야야마 운해&#93;</p>
                    </li>
                </ul>
                <div class="swiper-pagination"></div>
            </div>
            
            <div id="entertainment">
                <h2 id="entertainment_title">히로시마의 즐길거리</h2>
                <ul id="entertainment_list">
                    <li>
                        <div class="entertainment_list_img"></div>
                        <p class="entertainment_list_title">욕망이라는 이름의 시내 전차</p>
                        <p class="entertainment_list_text">도시 중심부와 거리가 멀지만 히로덴이라 불리는 현대식 트램 전차 덕분에 도심에서 편리하게 이동할 수 있습니다.</p>
                    </li>
                    <li>
                        <div class="entertainment_list_img"></div>
                        <p class="entertainment_list_title">활기찬 밤 문화</p>
                        <p class="entertainment_list_text">에비스 축제가 열리는 에비스초 거리는 활기 넘치는 분위기에서 한잔하기 좋은 곳입니다.</p>
                    </li>
                    <li>
                        <div class="entertainment_list_img"></div>
                        <p class="entertainment_list_title">기념관 그 이상</p>
                        <p class="entertainment_list_text">히로시마에는 기념관만 있는 게 아닙니다. 일본 유명한 음식인 오코노미야끼의 고장이며 굴 양식으로 유명해 생생한 굴 음식 등 다채로운 음식이 준비되있습니다.</p>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</div>
<!-- 경로보기끝 -->
<!-- 푸터영역시작 -->
<? include_once $_SERVER["DOCUMENT_ROOT"]."/hongkong_rwd/inc/footer.html" ?>
<!-- 푸터영역끝 -->
</body>
</html>