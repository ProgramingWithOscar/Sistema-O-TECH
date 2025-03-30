<template>

    <div>
        <div class="card-body d-flex justify-content-between flex-column shadow-sm p-5 m-5">
            <!--begin::Statistics-->
            <div class="mb-4 px-9">
                <!--begin::Info-->
                <div class="d-flex align-items-center mb-2">
                    <!--begin::Currency-->
                    <span class="fs-4 fw-semibold text-gray-500 align-self-start me-1>">$</span>
                    <!--end::Currency-->


                    <!--begin::Value-->
                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1">789,000</span>
                    <!--end::Value-->

                    <!--begin::Label-->
                    <span class="badge badge-light-success fs-base">
                        <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>
                        2.2% </span>

                    <!--end::Label-->
                </div>
                <!--end::Info-->

                <!--begin::Description-->
                <span class="fs-6 fw-semibold text-gray-500">Total ventas hoy</span>
                <!--end::Description-->
            </div>
            <!--end::Statistics-->

            <!--begin::Chart-->
            <div id="kt_card_widget_8_chart" class="min-h-auto" style="height: 125px; min-height: 140px;">
                <div id="apexcharts64mszm5f" class="apexcharts-canvas apexcharts64mszm5f apexcharts-theme-"
                    style="width: 373px; height: 125px;"><svg id="SvgjsSvg1288" width="373" height="125"
                        xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                        xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable hovering-zoom"
                        xmlns:data="ApexChartsNS" transform="translate(0, 0)">
                        <!-- <foreignObject x="0" y="0" width="373" height="125">
                            <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                style="max-height: 62.5px;"></div>
                            <style>
                                .apexcharts-flip-y {
                                    transform: scaleY(-1) translateY(-100%);
                                    transform-origin: top;
                                    transform-box: fill-box;
                                }

                                .apexcharts-flip-x {
                                    transform: scaleX(-1);
                                    transform-origin: center;
                                    transform-box: fill-box;
                                }

                                .apexcharts-legend {
                                    display: flex;
                                    overflow: auto;
                                    padding: 0 10px;
                                }

                                .apexcharts-legend.apx-legend-position-bottom,
                                .apexcharts-legend.apx-legend-position-top {
                                    flex-wrap: wrap
                                }

                                .apexcharts-legend.apx-legend-position-right,
                                .apexcharts-legend.apx-legend-position-left {
                                    flex-direction: column;
                                    bottom: 0;
                                }

                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                .apexcharts-legend.apx-legend-position-right,
                                .apexcharts-legend.apx-legend-position-left {
                                    justify-content: flex-start;
                                }

                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                    justify-content: center;
                                }

                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                    justify-content: flex-end;
                                }

                                .apexcharts-legend-series {
                                    cursor: pointer;
                                    line-height: normal;
                                    display: flex;
                                    align-items: center;
                                }

                                .apexcharts-legend-text {
                                    position: relative;
                                    font-size: 14px;
                                }

                                .apexcharts-legend-text *,
                                .apexcharts-legend-marker * {
                                    pointer-events: none;
                                }

                                .apexcharts-legend-marker {
                                    position: relative;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    cursor: pointer;
                                    margin-right: 1px;
                                }

                                .apexcharts-legend-series.apexcharts-no-click {
                                    cursor: auto;
                                }

                                .apexcharts-legend .apexcharts-hidden-zero-series,
                                .apexcharts-legend .apexcharts-hidden-null-series {
                                    display: none !important;
                                }

                                .apexcharts-inactive-legend {
                                    opacity: 0.45;
                                }
                            </style>
                        </foreignObject> -->
                        <g id="SvgjsG1295" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g>
                        <g id="SvgjsG1296" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g>
                        <rect id="SvgjsRect1312" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                            stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                        <g id="SvgjsG1331" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)">
                            <g id="SvgjsG1332" class="apexcharts-yaxis-texts-g"></g>
                        </g>
                        <g id="SvgjsG1290" class="apexcharts-inner apexcharts-graphical" transform="translate(-10, 30)">
                            <defs id="SvgjsDefs1289">
                                <clipPath id="gridRectMask64mszm5f">
                                    <rect id="SvgjsRect1292" width="402" height="100" x="0" y="0" rx="0" ry="0"
                                        opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                    </rect>
                                </clipPath>
                                <clipPath id="gridRectBarMask64mszm5f">
                                    <rect id="SvgjsRect1293" width="408" height="106" x="-3" y="-3" rx="0" ry="0"
                                        opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                    </rect>
                                </clipPath>
                                <clipPath id="gridRectMarkerMask64mszm5f">
                                    <rect id="SvgjsRect1294" width="402" height="100" x="0" y="0" rx="0" ry="0"
                                        opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                    </rect>
                                </clipPath>
                                <clipPath id="forecastMask64mszm5f"></clipPath>
                                <clipPath id="nonForecastMask64mszm5f"></clipPath>
                            </defs>
                            <g id="SvgjsG1303" class="apexcharts-grid">
                                <g id="SvgjsG1304" class="apexcharts-gridlines-horizontal">
                                    <line id="SvgjsLine1308" x1="0" y1="50" x2="402" y2="50" stroke="#dbdfe9"
                                        stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                </g>
                                <g id="SvgjsG1305" class="apexcharts-gridlines-vertical"></g>
                                <line id="SvgjsLine1311" x1="0" y1="100" x2="402" y2="100" stroke="transparent"
                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                <line id="SvgjsLine1310" x1="0" y1="1" x2="0" y2="100" stroke="transparent"
                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                            </g>
                            <g id="SvgjsG1306" class="apexcharts-grid-borders">
                                <line id="SvgjsLine1307" x1="0" y1="0" x2="402" y2="0" stroke="#dbdfe9"
                                    stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                <line id="SvgjsLine1309" x1="0" y1="100" x2="402" y2="100" stroke="#dbdfe9"
                                    stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                            </g>
                            <g id="SvgjsG1297" class="apexcharts-area-series apexcharts-plot-series">
                                <g id="SvgjsG1298" class="apexcharts-series" zIndex="0" seriesName="Sales"
                                    data:longestSeries="true" rel="1" data:realIndex="0">
                                    <path id="SvgjsPath1301"
                                        d="M 0 37.5C 11.725 37.5 21.775 7.5 33.5 7.5C 45.225 7.5 55.275 80 67 80C 78.725 80 88.775 2.5 100.5 2.5C 112.225 2.5 122.275 45 134 45C 145.725 45 155.775 10 167.5 10C 179.225 10 189.275 20 201 20C 212.725 20 222.775 37.5 234.5 37.5C 246.225 37.5 256.275 2.5 268 2.5C 279.725 2.5 289.775 37.5 301.5 37.5C 313.225 37.5 323.275 7.5 335 7.5C 346.725 7.5 356.775 30 368.5 30C 380.225 30 390.275 7.5 402 7.5C 402 7.5 402 7.5 402 100 L 0 100z"
                                        fill="rgba(23,198,83,0)" fill-opacity="1" stroke-opacity="1"
                                        stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                        class="apexcharts-area" index="0" clip-path="url(#gridRectMask64mszm5f)"
                                        pathTo="M 0 37.5C 11.725 37.5 21.775 7.5 33.5 7.5C 45.225 7.5 55.275 80 67 80C 78.725 80 88.775 2.5 100.5 2.5C 112.225 2.5 122.275 45 134 45C 145.725 45 155.775 10 167.5 10C 179.225 10 189.275 20 201 20C 212.725 20 222.775 37.5 234.5 37.5C 246.225 37.5 256.275 2.5 268 2.5C 279.725 2.5 289.775 37.5 301.5 37.5C 313.225 37.5 323.275 7.5 335 7.5C 346.725 7.5 356.775 30 368.5 30C 380.225 30 390.275 7.5 402 7.5C 402 7.5 402 7.5 402 100 L 0 100z"
                                        pathFrom="M 0 150 L 0 150 L 33.5 150 L 67 150 L 100.5 150 L 134 150 L 167.5 150 L 201 150 L 234.5 150 L 268 150 L 301.5 150 L 335 150 L 368.5 150 L 402 150z">
                                    </path>
                                    <path id="SvgjsPath1302"
                                        d="M 0 37.5C 11.725 37.5 21.775 7.5 33.5 7.5C 45.225 7.5 55.275 80 67 80C 78.725 80 88.775 2.5 100.5 2.5C 112.225 2.5 122.275 45 134 45C 145.725 45 155.775 10 167.5 10C 179.225 10 189.275 20 201 20C 212.725 20 222.775 37.5 234.5 37.5C 246.225 37.5 256.275 2.5 268 2.5C 279.725 2.5 289.775 37.5 301.5 37.5C 313.225 37.5 323.275 7.5 335 7.5C 346.725 7.5 356.775 30 368.5 30C 380.225 30 390.275 7.5 402 7.5"
                                        fill="none" fill-opacity="1" stroke="#252f4a" stroke-opacity="1"
                                        stroke-linecap="butt" stroke-width="2" stroke-dasharray="0"
                                        class="apexcharts-area" index="0" clip-path="url(#gridRectMask64mszm5f)"
                                        pathTo="M 0 37.5C 11.725 37.5 21.775 7.5 33.5 7.5C 45.225 7.5 55.275 80 67 80C 78.725 80 88.775 2.5 100.5 2.5C 112.225 2.5 122.275 45 134 45C 145.725 45 155.775 10 167.5 10C 179.225 10 189.275 20 201 20C 212.725 20 222.775 37.5 234.5 37.5C 246.225 37.5 256.275 2.5 268 2.5C 279.725 2.5 289.775 37.5 301.5 37.5C 313.225 37.5 323.275 7.5 335 7.5C 346.725 7.5 356.775 30 368.5 30C 380.225 30 390.275 7.5 402 7.5"
                                        pathFrom="M 0 150 L 0 150 L 33.5 150 L 67 150 L 100.5 150 L 134 150 L 167.5 150 L 201 150 L 234.5 150 L 268 150 L 301.5 150 L 335 150 L 368.5 150 L 402 150"
                                        fill-rule="evenodd"></path>
                                    <g id="SvgjsG1299"
                                        class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                        data:realIndex="0">
                                        <g class="apexcharts-series-markers">
                                            <path id="SvgjsPath1336" d="M 134, 0
           m -0, 0
           a 0,0 0 1,0 0,0
           a 0,0 0 1,0 -0,0" fill="#17c653" fill-opacity="1" stroke="#252f4a" stroke-opacity="0.9"
                                                stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" cx="134"
                                                cy="0" shape="circle"
                                                class="apexcharts-marker wwe51fhis no-pointer-events"
                                                default-marker-size="0"></path>
                                        </g>
                                    </g>
                                </g>
                                <g id="SvgjsG1300" class="apexcharts-datalabels" data:realIndex="0"></g>
                            </g>
                            <line id="SvgjsLine1313" x1="133.5" y1="0" x2="133.5" y2="100" stroke="#252f4a"
                                stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="133.5"
                                y="0" width="1" height="100" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                stroke-width="1"></line>
                            <line id="SvgjsLine1314" x1="0" y1="0" x2="402" y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                            <line id="SvgjsLine1315" x1="0" y1="0" x2="402" y2="0" stroke-dasharray="0" stroke-width="0"
                                stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                            <g id="SvgjsG1316" class="apexcharts-xaxis" transform="translate(0, 0)">
                                <g id="SvgjsG1317" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                            </g>
                            <g id="SvgjsG1333" class="apexcharts-yaxis-annotations"></g>
                            <g id="SvgjsG1334" class="apexcharts-xaxis-annotations"></g>
                            <g id="SvgjsG1335" class="apexcharts-point-annotations"></g>
                            <rect id="SvgjsRect1337" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                                stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"
                                class="apexcharts-zoom-rect"></rect>
                            <rect id="SvgjsRect1338" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                                stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"
                                class="apexcharts-selection-rect"></rect>
                        </g>
                    </svg>
                    <div class="apexcharts-tooltip apexcharts-theme-light" style="left: 135px; top: 48px;">
                        <div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;">Feb 5</div>
                        <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-0 apexcharts-active"
                            style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker"
                                style="background-color: rgb(23, 198, 83);"></span>
                            <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                <div class="apexcharts-tooltip-y-group"><span
                                        class="apexcharts-tooltip-text-y-label">Sales: </span><span
                                        class="apexcharts-tooltip-text-y-value">$4.2K</span></div>
                                <div class="apexcharts-tooltip-goals-group"><span
                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                <div class="apexcharts-tooltip-z-group"><span
                                        class="apexcharts-tooltip-text-z-label"></span><span
                                        class="apexcharts-tooltip-text-z-value"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"
                        style="left: 97.7676px; top: 132px;">
                        <div class="apexcharts-xaxistooltip-text"
                            style="font-family: inherit; font-size: 12px; min-width: 28.8281px;">Feb 5</div>
                    </div>
                    <div
                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                        <div class="apexcharts-yaxistooltip-text"></div>
                    </div>
                </div>
            </div>
            <!--end::Chart-->
        </div>
    </div>
</template>
