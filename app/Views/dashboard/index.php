<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="row">
    <!-- task, page, download counter  start -->
    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-block">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="text-c-purple">$30200</h4>
                        <h6 class="text-muted m-b-0">All Earnings</h6>
                    </div>
                    <div class="col-4 text-right">
                        <i class="fa fa-bar-chart f-28"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-c-purple">
                <div class="row align-items-center">
                    <div class="col-9">
                        <a href="/admin/jabatan" class="text-white m-b-0">% change</a>
                    </div>
                    <div class="col-3 text-right">
                        <i class="fa fa-line-chart text-white f-16"></i>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-block">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="text-c-green">290+</h4>
                        <h6 class="text-muted m-b-0">Page Views</h6>
                    </div>
                    <div class="col-4 text-right">
                        <i class="fa fa-file-text-o f-28"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-c-green">
                <div class="row align-items-center">
                    <div class="col-9">
                        <p class="text-white m-b-0">% change</p>
                    </div>
                    <div class="col-3 text-right">
                        <i class="fa fa-line-chart text-white f-16"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-block">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="text-c-red">145</h4>
                        <h6 class="text-muted m-b-0">Task Completed</h6>
                    </div>
                    <div class="col-4 text-right">
                        <i class="fa fa-calendar-check-o f-28"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-c-red">
                <div class="row align-items-center">
                    <div class="col-9">
                        <p class="text-white m-b-0">% change</p>
                    </div>
                    <div class="col-3 text-right">
                        <i class="fa fa-line-chart text-white f-16"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-block">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="text-c-blue">500</h4>
                        <h6 class="text-muted m-b-0">Downloads</h6>
                    </div>
                    <div class="col-4 text-right">
                        <i class="fa fa-hand-o-down f-28"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-c-blue">
                <div class="row align-items-center">
                    <div class="col-9">
                        <p class="text-white m-b-0">% change</p>
                    </div>
                    <div class="col-3 text-right">
                        <i class="fa fa-line-chart text-white f-16"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- task, page, download counter  end -->

    <!--  sale analytics start -->
    <div class="col-xl-8 col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Sales Analytics</h5>
                <span class="text-muted">Get 15% Off on <a href="https://www.amcharts.com/" target="_blank">amCharts</a> licences. Use code "codedthemes" and get the discount.</span>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                        <li><i class="fa fa-trash close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                <div id="sales-analytics" style="height: 400px; overflow: visible; text-align: left;">
                    <div class="amcharts-main-div" style="position: relative;">
                        <div class="amcharts-chart-div" style="overflow: hidden; position: relative; text-align: left; width: 595px; height: 400px; padding: 0px; cursor: default; touch-action: auto;"><svg version="1.1" style="position: absolute; width: 595px; height: 400px; top: 0.375px; left: -0.203125px;">
                                <desc>JavaScript chart by amCharts 3.21.15</desc>
                                <g>
                                    <path cs="100,100" d="M0.5,0.5 L594.5,0.5 L594.5,399.5 L0.5,399.5 Z" fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1" stroke-opacity="0" class="amcharts-bg"></path>
                                    <path cs="100,100" d="M0.5,0.5 L514.5,0.5 L514.5,249.5 L0.5,249.5 L0.5,0.5 Z" fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1" stroke-opacity="0" class="amcharts-plot-area" transform="translate(40,110)"></path>
                                </g>
                                <g>
                                    <g class="amcharts-value-axis value-axis-v1" transform="translate(40,0)" visibility="hidden"></g>
                                    <g class="amcharts-category-axis" transform="translate(40,110)">
                                        <g>
                                            <path cs="100,100" d="M14.5,249.5 L14.5,249.5 L14.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.07" stroke="#000000" class="amcharts-axis-grid amcharts-axis-grid-minor"></path>
                                        </g>
                                        <g>
                                            <path cs="100,100" d="M98.5,0.5 L98.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,249)" class="amcharts-axis-tick"></path>
                                            <path cs="100,100" d="M98.5,249.5 L98.5,249.5 L98.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.1" stroke="#000000" class="amcharts-axis-grid"></path>
                                        </g>
                                        <g>
                                            <path cs="100,100" d="M180.5,249.5 L180.5,249.5 L180.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.07" stroke="#000000" class="amcharts-axis-grid amcharts-axis-grid-minor"></path>
                                        </g>
                                        <g>
                                            <path cs="100,100" d="M265.5,0.5 L265.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,249)" class="amcharts-axis-tick"></path>
                                            <path cs="100,100" d="M265.5,249.5 L265.5,249.5 L265.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.1" stroke="#000000" class="amcharts-axis-grid"></path>
                                        </g>
                                        <g>
                                            <path cs="100,100" d="M347.5,249.5 L347.5,249.5 L347.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.07" stroke="#000000" class="amcharts-axis-grid amcharts-axis-grid-minor"></path>
                                        </g>
                                        <g>
                                            <path cs="100,100" d="M432.5,0.5 L432.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,249)" class="amcharts-axis-tick"></path>
                                            <path cs="100,100" d="M432.5,249.5 L432.5,249.5 L432.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.1" stroke="#000000" class="amcharts-axis-grid"></path>
                                        </g>
                                    </g>
                                    <g class="amcharts-value-axis value-axis-v1" transform="translate(40,110)" visibility="visible">
                                        <g>
                                            <path cs="100,100" d="M0.5,249.5 L0.5,249.5 L514.5,249.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000" class="amcharts-axis-grid"></path>
                                        </g>
                                        <g>
                                            <path cs="100,100" d="M0.5,199.5 L0.5,199.5 L514.5,199.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000" class="amcharts-axis-grid"></path>
                                        </g>
                                        <g>
                                            <path cs="100,100" d="M0.5,149.5 L0.5,149.5 L514.5,149.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000" class="amcharts-axis-grid"></path>
                                        </g>
                                        <g>
                                            <path cs="100,100" d="M0.5,100.5 L0.5,100.5 L514.5,100.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000" class="amcharts-axis-grid"></path>
                                        </g>
                                        <g>
                                            <path cs="100,100" d="M0.5,50.5 L0.5,50.5 L514.5,50.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000" class="amcharts-axis-grid"></path>
                                        </g>
                                        <g>
                                            <path cs="100,100" d="M0.5,0.5 L0.5,0.5 L514.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000" class="amcharts-axis-grid"></path>
                                        </g>
                                    </g>
                                </g>
                                <g transform="translate(40,110)" clip-path="url(#AmChartsEl-3)">
                                    <g visibility="hidden"></g>
                                </g>
                                <g></g>
                                <g></g>
                                <g></g>
                                <g>
                                    <g transform="translate(40,110)" class="amcharts-graph-line amcharts-graph-g1">
                                        <g></g>
                                        <g clip-path="url(#AmChartsEl-5)">
                                            <path cs="100,100" d="M1.5,217.13 L4.5,222.11 L7.5,212.15 L10.5,209.66 L12.5,204.68 L15.5,217.13 L18.5,194.72 L21.5,192.23 L23.5,199.7 L26.5,207.17 L29.5,209.66 L31.5,204.68 L34.5,197.21 L37.5,184.76 L40.5,189.74 L42.5,177.29 L45.5,169.82 L48.5,204.68 L51.5,189.74 L53.5,194.72 L56.5,204.68 L59.5,202.19 L62.5,214.64 L64.5,212.15 L67.5,219.62 L70.5,229.58 L72.5,227.09 L75.5,229.58 L78.5,232.07 L81.5,237.05 L83.5,222.11 L86.5,217.13 L89.5,204.68 L92.5,199.7 L94.5,177.29 L97.5,167.33 L100.5,144.92 L103.5,162.35 L105.5,172.31 L108.5,132.47 L111.5,120.02 L113.5,134.96 L116.5,147.41 L119.5,142.43 L122.5,149.9 L124.5,152.39 L127.5,164.84 L130.5,177.29 L133.5,164.84 L135.5,157.37 L138.5,144.92 L141.5,127.49 L144.5,134.96 L146.5,132.47 L149.5,112.55 L152.5,102.59 L154.5,105.08 L157.5,107.57 L160.5,97.61 L163.5,102.59 L165.5,82.67 L168.5,87.65 L171.5,97.61 L174.5,85.16 L176.5,77.69 L179.5,72.71 L182.5,82.67 L185.5,92.63 L187.5,134.96 L190.5,169.82 L193.5,197.21 L195.5,204.68 L198.5,197.21 L201.5,179.78 L204.5,182.27 L206.5,159.86 L209.5,167.33 L212.5,172.31 L215.5,174.8 L217.5,164.84 L220.5,154.88 L223.5,157.37 L226.5,139.94 L228.5,127.49 L231.5,117.53 L234.5,107.57 L236.5,100.1 L239.5,97.61 L242.5,77.69 L245.5,82.67 L247.5,70.22 L250.5,57.77 L253.5,62.75 L256.5,75.2 L258.5,70.22 L261.5,75.2 L264.5,70.22 L267.5,67.73 L269.5,82.67 L272.5,80.18 L275.5,87.65 L278.5,72.71 L280.5,62.75 L283.5,65.24 L286.5,72.71 L288.5,60.26 L291.5,57.77 L294.5,47.81 L297.5,42.83 L299.5,50.3 L302.5,47.81 L305.5,32.87 L308.5,45.32 L310.5,35.36 L313.5,50.3 L316.5,32.87 L319.5,42.83 L321.5,37.85 L324.5,40.34 L327.5,45.32 L329.5,67.73 L332.5,72.71 L335.5,62.75 L338.5,52.79 L340.5,75.2 L343.5,67.73 L346.5,97.61 L349.5,95.12 L351.5,85.16 L354.5,87.65 L357.5,67.73 L360.5,52.79 L362.5,55.28 L365.5,55.28 L368.5,55.28 L370.5,65.24 L373.5,67.73 L376.5,62.75 L379.5,75.2 L381.5,57.77 L384.5,82.67 L387.5,95.12 L390.5,90.14 L392.5,97.61 L395.5,102.59 L398.5,117.53 L401.5,115.04 L403.5,110.06 L406.5,102.59 L409.5,105.08 L411.5,112.55 L414.5,120.02 L417.5,115.04 L420.5,125 L422.5,125 L425.5,122.51 L428.5,120.02 L431.5,105.08 L433.5,100.1 L436.5,82.67 L439.5,90.14 L442.5,85.16 L444.5,100.1 L447.5,92.63 L450.5,97.61 L452.5,100.1 L455.5,87.65 L458.5,62.75 L461.5,57.77 L463.5,55.28 L466.5,75.2 L469.5,75.2 L472.5,67.73 L474.5,72.71 L477.5,65.24 L480.5,55.28 L483.5,37.85 L485.5,45.32 L488.5,42.83 L491.5,30.38 L493.5,37.85 L496.5,37.85 L499.5,50.3 L502.5,32.87 L504.5,40.34 L507.5,42.83 L510.5,40.34 L513.5,47.81 L513.5,249.5 L1.5,249.5 L1.5,217.13 Z" fill="#11c15b" stroke="#000" fill-opacity="0.5" stroke-width="1" stroke-opacity="0" class="amcharts-graph-fill"></path>
                                            <path cs="100,100" d="M1.5,217.13 L4.5,222.11 L7.5,212.15 L10.5,209.66 L12.5,204.68 L15.5,217.13 L18.5,194.72 L21.5,192.23 L23.5,199.7 L26.5,207.17 L29.5,209.66 L31.5,204.68 L34.5,197.21 L37.5,184.76 L40.5,189.74 L42.5,177.29 L45.5,169.82 L48.5,204.68 L51.5,189.74 L53.5,194.72 L56.5,204.68 L59.5,202.19 L62.5,214.64 L64.5,212.15 L67.5,219.62 L70.5,229.58 L72.5,227.09 L75.5,229.58 L78.5,232.07 L81.5,237.05 L83.5,222.11 L86.5,217.13 L89.5,204.68 L92.5,199.7 L94.5,177.29 L97.5,167.33 L100.5,144.92 L103.5,162.35 L105.5,172.31 L108.5,132.47 L111.5,120.02 L113.5,134.96 L116.5,147.41 L119.5,142.43 L122.5,149.9 L124.5,152.39 L127.5,164.84 L130.5,177.29 L133.5,164.84 L135.5,157.37 L138.5,144.92 L141.5,127.49 L144.5,134.96 L146.5,132.47 L149.5,112.55 L152.5,102.59 L154.5,105.08 L157.5,107.57 L160.5,97.61 L163.5,102.59 L165.5,82.67 L168.5,87.65 L171.5,97.61 L174.5,85.16 L176.5,77.69 L179.5,72.71 L182.5,82.67 L185.5,92.63 L187.5,134.96 L190.5,169.82 L193.5,197.21 L195.5,204.68 L198.5,197.21 L201.5,179.78 L204.5,182.27 L206.5,159.86 L209.5,167.33 L212.5,172.31 L215.5,174.8 L217.5,164.84 L220.5,154.88 L223.5,157.37 L226.5,139.94 L228.5,127.49 L231.5,117.53 L234.5,107.57 L236.5,100.1 L239.5,97.61 L242.5,77.69 L245.5,82.67 L247.5,70.22 L250.5,57.77 L253.5,62.75 L256.5,75.2 L258.5,70.22 L261.5,75.2 L264.5,70.22 L267.5,67.73 L269.5,82.67 L272.5,80.18 L275.5,87.65 L278.5,72.71 L280.5,62.75 L283.5,65.24 L286.5,72.71 L288.5,60.26 L291.5,57.77 L294.5,47.81 L297.5,42.83 L299.5,50.3 L302.5,47.81 L305.5,32.87 L308.5,45.32 L310.5,35.36 L313.5,50.3 L316.5,32.87 L319.5,42.83 L321.5,37.85 L324.5,40.34 L327.5,45.32 L329.5,67.73 L332.5,72.71 L335.5,62.75 L338.5,52.79 L340.5,75.2 L343.5,67.73 L346.5,97.61 L349.5,95.12 L351.5,85.16 L354.5,87.65 L357.5,67.73 L360.5,52.79 L362.5,55.28 L365.5,55.28 L368.5,55.28 L370.5,65.24 L373.5,67.73 L376.5,62.75 L379.5,75.2 L381.5,57.77 L384.5,82.67 L387.5,95.12 L390.5,90.14 L392.5,97.61 L395.5,102.59 L398.5,117.53 L401.5,115.04 L403.5,110.06 L406.5,102.59 L409.5,105.08 L411.5,112.55 L414.5,120.02 L417.5,115.04 L420.5,125 L422.5,125 L425.5,122.51 L428.5,120.02 L431.5,105.08 L433.5,100.1 L436.5,82.67 L439.5,90.14 L442.5,85.16 L444.5,100.1 L447.5,92.63 L450.5,97.61 L452.5,100.1 L455.5,87.65 L458.5,62.75 L461.5,57.77 L463.5,55.28 L466.5,75.2 L469.5,75.2 L472.5,67.73 L474.5,72.71 L477.5,65.24 L480.5,55.28 L483.5,37.85 L485.5,45.32 L488.5,42.83 L491.5,30.38 L493.5,37.85 L496.5,37.85 L499.5,50.3 L502.5,32.87 L504.5,40.34 L507.5,42.83 L510.5,40.34 L513.5,47.81" fill="none" stroke-width="3" stroke-opacity="0.9" stroke="#11c15b" stroke-linejoin="round" class="amcharts-graph-stroke"></path>
                                        </g>
                                        <clipPath id="AmChartsEl-5">
                                            <rect x="0" y="0" width="514" height="249" rx="0" ry="0" stroke-width="0"></rect>
                                        </clipPath>
                                        <g></g>
                                    </g>
                                </g>
                                <g></g>
                                <g>
                                    <path cs="100,100" d="M0.5,249.5 L514.5,249.5 L514.5,249.5" fill="none" stroke-width="1" stroke-opacity="0.2" stroke="#000000" transform="translate(40,110)" class="amcharts-axis-zero-grid-v1 amcharts-axis-zero-grid"></path>
                                    <path cs="100,100" d="M0.5,90.5 L515.5,90.5 L515.5,90.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(40,0)" class="amcharts-axis-zero-grid-v1 amcharts-axis-zero-grid"></path>
                                    <g>
                                        <path cs="100,100" d="M0.5,0.5 L514.5,0.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(0,90)" class="amcharts-axis-line"></path>
                                    </g>
                                    <g class="amcharts-value-axis value-axis-v1">
                                        <path cs="100,100" d="M0.5,0.5 L0.5,90.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(40,0)" class="amcharts-axis-line" visibility="hidden"></path>
                                    </g>
                                    <g class="amcharts-category-axis">
                                        <path cs="100,100" d="M0.5,0.5 L514.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(40,359)" class="amcharts-axis-line"></path>
                                    </g>
                                    <g class="amcharts-value-axis value-axis-v1">
                                        <path cs="100,100" d="M0.5,0.5 L0.5,249.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(40,110)" class="amcharts-axis-line" visibility="visible"></path>
                                    </g>
                                </g>
                                <g>
                                    <g transform="translate(40,110)" clip-path="url(#AmChartsEl-4)" style="pointer-events: none;">
                                        <path cs="100,100" d="M0.5,0.5 L0.5,0.5 L0.5,249.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" class="amcharts-cursor-line amcharts-cursor-line-vertical" visibility="hidden" transform="translate(131,0)"></path>
                                        <path cs="100,100" d="M0.5,0.5 L514.5,0.5 L514.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.5" stroke="#000000" class="amcharts-cursor-line amcharts-cursor-line-horizontal" visibility="hidden" transform="translate(0,3)"></path>
                                    </g>
                                    <clipPath id="AmChartsEl-4">
                                        <rect x="0" y="0" width="514" height="249" rx="0" ry="0" stroke-width="0"></rect>
                                    </clipPath>
                                </g>
                                <g>
                                    <g class="amcharts-scrollbar-horizontal" visibility="visible" transform="translate(40,20)" style="touch-action: none;">
                                        <rect x="0.5" y="0.5" width="515" height="90" rx="0" ry="0" stroke-width="1" fill="#000000" stroke="#000000" fill-opacity="0.12" stroke-opacity="0.12" class="amcharts-scrollbar-bg"></rect>
                                        <rect x="0.5" y="0.5" width="514" height="91" rx="0" ry="0" stroke-width="0" fill="#FFFFFF" stroke="#FFFFFF" fill-opacity="0.4" stroke-opacity="0.4" class="amcharts-scrollbar-bg-selected" transform="translate(0,0)"></rect>
                                        <g transform="translate(0,0)" class="amcharts-graph-line amcharts-graph-g1">
                                            <g></g>
                                            <g>
                                                <path cs="100,100" d="M1.5,78.8 L4.5,80.6 L7.5,77 L10.5,76.1 L12.5,74.3 L15.5,78.8 L18.5,70.7 L21.5,69.8 L23.5,72.5 L26.5,75.2 L29.5,76.1 L31.5,74.3 L34.5,71.6 L37.5,67.1 L40.5,68.9 L42.5,64.4 L45.5,61.7 L48.5,74.3 L51.5,68.9 L53.5,70.7 L56.5,74.3 L59.5,73.4 L62.5,77.9 L64.5,77 L67.5,79.7 L70.5,83.3 L72.5,82.4 L75.5,83.3 L78.5,84.2 L81.5,86 L83.5,80.6 L86.5,78.8 L89.5,74.3 L92.5,72.5 L94.5,64.4 L97.5,60.8 L100.5,52.7 L103.5,59 L105.5,62.6 L108.5,48.2 L111.5,43.7 L113.5,49.1 L116.5,53.6 L119.5,51.8 L122.5,54.5 L124.5,55.4 L127.5,59.9 L130.5,64.4 L133.5,59.9 L135.5,57.2 L138.5,52.7 L141.5,46.4 L144.5,49.1 L146.5,48.2 L149.5,41 L152.5,37.4 L154.5,38.3 L157.5,39.2 L160.5,35.6 L163.5,37.4 L165.5,30.2 L168.5,32 L171.5,35.6 L174.5,31.1 L176.5,28.4 L179.5,26.6 L182.5,30.2 L185.5,33.8 L187.5,49.1 L190.5,61.7 L193.5,71.6 L195.5,74.3 L198.5,71.6 L201.5,65.3 L204.5,66.2 L206.5,58.1 L209.5,60.8 L212.5,62.6 L215.5,63.5 L217.5,59.9 L220.5,56.3 L223.5,57.2 L226.5,50.9 L228.5,46.4 L231.5,42.8 L234.5,39.2 L236.5,36.5 L239.5,35.6 L242.5,28.4 L245.5,30.2 L247.5,25.7 L250.5,21.2 L253.5,23 L256.5,27.5 L258.5,25.7 L261.5,27.5 L264.5,25.7 L267.5,24.8 L269.5,30.2 L272.5,29.3 L275.5,32 L278.5,26.6 L280.5,23 L283.5,23.9 L286.5,26.6 L288.5,22.1 L291.5,21.2 L294.5,17.6 L297.5,15.8 L299.5,18.5 L302.5,17.6 L305.5,12.2 L308.5,16.7 L310.5,13.1 L313.5,18.5 L316.5,12.2 L319.5,15.8 L321.5,14 L324.5,14.9 L327.5,16.7 L329.5,24.8 L332.5,26.6 L335.5,23 L338.5,19.4 L340.5,27.5 L343.5,24.8 L346.5,35.6 L349.5,34.7 L351.5,31.1 L354.5,32 L357.5,24.8 L360.5,19.4 L362.5,20.3 L365.5,20.3 L368.5,20.3 L370.5,23.9 L373.5,24.8 L376.5,23 L379.5,27.5 L381.5,21.2 L384.5,30.2 L387.5,34.7 L390.5,32.9 L392.5,35.6 L395.5,37.4 L398.5,42.8 L401.5,41.9 L403.5,40.1 L406.5,37.4 L409.5,38.3 L411.5,41 L414.5,43.7 L417.5,41.9 L420.5,45.5 L422.5,45.5 L425.5,44.6 L428.5,43.7 L431.5,38.3 L433.5,36.5 L436.5,30.2 L439.5,32.9 L442.5,31.1 L444.5,36.5 L447.5,33.8 L450.5,35.6 L452.5,36.5 L455.5,32 L458.5,23 L461.5,21.2 L463.5,20.3 L466.5,27.5 L469.5,27.5 L472.5,24.8 L474.5,26.6 L477.5,23.9 L480.5,20.3 L483.5,14 L485.5,16.7 L488.5,15.8 L491.5,11.3 L493.5,14 L496.5,14 L499.5,18.5 L502.5,12.2 L504.5,14.9 L507.5,15.8 L510.5,14.9 L513.5,17.6 L513.5,90.5 L1.5,90.5 L1.5,78.8 Z" fill="#BBBBBB" stroke="#000" fill-opacity="0.5" stroke-width="1" stroke-opacity="0" class="amcharts-scrollbar-graph-fill"></path>
                                                <path cs="100,100" d="M1.5,78.8 L4.5,80.6 L7.5,77 L10.5,76.1 L12.5,74.3 L15.5,78.8 L18.5,70.7 L21.5,69.8 L23.5,72.5 L26.5,75.2 L29.5,76.1 L31.5,74.3 L34.5,71.6 L37.5,67.1 L40.5,68.9 L42.5,64.4 L45.5,61.7 L48.5,74.3 L51.5,68.9 L53.5,70.7 L56.5,74.3 L59.5,73.4 L62.5,77.9 L64.5,77 L67.5,79.7 L70.5,83.3 L72.5,82.4 L75.5,83.3 L78.5,84.2 L81.5,86 L83.5,80.6 L86.5,78.8 L89.5,74.3 L92.5,72.5 L94.5,64.4 L97.5,60.8 L100.5,52.7 L103.5,59 L105.5,62.6 L108.5,48.2 L111.5,43.7 L113.5,49.1 L116.5,53.6 L119.5,51.8 L122.5,54.5 L124.5,55.4 L127.5,59.9 L130.5,64.4 L133.5,59.9 L135.5,57.2 L138.5,52.7 L141.5,46.4 L144.5,49.1 L146.5,48.2 L149.5,41 L152.5,37.4 L154.5,38.3 L157.5,39.2 L160.5,35.6 L163.5,37.4 L165.5,30.2 L168.5,32 L171.5,35.6 L174.5,31.1 L176.5,28.4 L179.5,26.6 L182.5,30.2 L185.5,33.8 L187.5,49.1 L190.5,61.7 L193.5,71.6 L195.5,74.3 L198.5,71.6 L201.5,65.3 L204.5,66.2 L206.5,58.1 L209.5,60.8 L212.5,62.6 L215.5,63.5 L217.5,59.9 L220.5,56.3 L223.5,57.2 L226.5,50.9 L228.5,46.4 L231.5,42.8 L234.5,39.2 L236.5,36.5 L239.5,35.6 L242.5,28.4 L245.5,30.2 L247.5,25.7 L250.5,21.2 L253.5,23 L256.5,27.5 L258.5,25.7 L261.5,27.5 L264.5,25.7 L267.5,24.8 L269.5,30.2 L272.5,29.3 L275.5,32 L278.5,26.6 L280.5,23 L283.5,23.9 L286.5,26.6 L288.5,22.1 L291.5,21.2 L294.5,17.6 L297.5,15.8 L299.5,18.5 L302.5,17.6 L305.5,12.2 L308.5,16.7 L310.5,13.1 L313.5,18.5 L316.5,12.2 L319.5,15.8 L321.5,14 L324.5,14.9 L327.5,16.7 L329.5,24.8 L332.5,26.6 L335.5,23 L338.5,19.4 L340.5,27.5 L343.5,24.8 L346.5,35.6 L349.5,34.7 L351.5,31.1 L354.5,32 L357.5,24.8 L360.5,19.4 L362.5,20.3 L365.5,20.3 L368.5,20.3 L370.5,23.9 L373.5,24.8 L376.5,23 L379.5,27.5 L381.5,21.2 L384.5,30.2 L387.5,34.7 L390.5,32.9 L392.5,35.6 L395.5,37.4 L398.5,42.8 L401.5,41.9 L403.5,40.1 L406.5,37.4 L409.5,38.3 L411.5,41 L414.5,43.7 L417.5,41.9 L420.5,45.5 L422.5,45.5 L425.5,44.6 L428.5,43.7 L431.5,38.3 L433.5,36.5 L436.5,30.2 L439.5,32.9 L442.5,31.1 L444.5,36.5 L447.5,33.8 L450.5,35.6 L452.5,36.5 L455.5,32 L458.5,23 L461.5,21.2 L463.5,20.3 L466.5,27.5 L469.5,27.5 L472.5,24.8 L474.5,26.6 L477.5,23.9 L480.5,20.3 L483.5,14 L485.5,16.7 L488.5,15.8 L491.5,11.3 L493.5,14 L496.5,14 L499.5,18.5 L502.5,12.2 L504.5,14.9 L507.5,15.8 L510.5,14.9 L513.5,17.6" fill="none" stroke-width="1" stroke-opacity="0" stroke="#BBBBBB" stroke-linejoin="round" class="amcharts-scrollbar-graph-stroke"></path>
                                            </g>
                                            <g></g>
                                        </g>
                                        <g transform="translate(0,0)" class="amcharts-graph-line amcharts-graph-g1" clip-path="url(#AmChartsEl-6)">
                                            <g></g>
                                            <g>
                                                <path cs="100,100" d="M1.5,78.8 L4.5,80.6 L7.5,77 L10.5,76.1 L12.5,74.3 L15.5,78.8 L18.5,70.7 L21.5,69.8 L23.5,72.5 L26.5,75.2 L29.5,76.1 L31.5,74.3 L34.5,71.6 L37.5,67.1 L40.5,68.9 L42.5,64.4 L45.5,61.7 L48.5,74.3 L51.5,68.9 L53.5,70.7 L56.5,74.3 L59.5,73.4 L62.5,77.9 L64.5,77 L67.5,79.7 L70.5,83.3 L72.5,82.4 L75.5,83.3 L78.5,84.2 L81.5,86 L83.5,80.6 L86.5,78.8 L89.5,74.3 L92.5,72.5 L94.5,64.4 L97.5,60.8 L100.5,52.7 L103.5,59 L105.5,62.6 L108.5,48.2 L111.5,43.7 L113.5,49.1 L116.5,53.6 L119.5,51.8 L122.5,54.5 L124.5,55.4 L127.5,59.9 L130.5,64.4 L133.5,59.9 L135.5,57.2 L138.5,52.7 L141.5,46.4 L144.5,49.1 L146.5,48.2 L149.5,41 L152.5,37.4 L154.5,38.3 L157.5,39.2 L160.5,35.6 L163.5,37.4 L165.5,30.2 L168.5,32 L171.5,35.6 L174.5,31.1 L176.5,28.4 L179.5,26.6 L182.5,30.2 L185.5,33.8 L187.5,49.1 L190.5,61.7 L193.5,71.6 L195.5,74.3 L198.5,71.6 L201.5,65.3 L204.5,66.2 L206.5,58.1 L209.5,60.8 L212.5,62.6 L215.5,63.5 L217.5,59.9 L220.5,56.3 L223.5,57.2 L226.5,50.9 L228.5,46.4 L231.5,42.8 L234.5,39.2 L236.5,36.5 L239.5,35.6 L242.5,28.4 L245.5,30.2 L247.5,25.7 L250.5,21.2 L253.5,23 L256.5,27.5 L258.5,25.7 L261.5,27.5 L264.5,25.7 L267.5,24.8 L269.5,30.2 L272.5,29.3 L275.5,32 L278.5,26.6 L280.5,23 L283.5,23.9 L286.5,26.6 L288.5,22.1 L291.5,21.2 L294.5,17.6 L297.5,15.8 L299.5,18.5 L302.5,17.6 L305.5,12.2 L308.5,16.7 L310.5,13.1 L313.5,18.5 L316.5,12.2 L319.5,15.8 L321.5,14 L324.5,14.9 L327.5,16.7 L329.5,24.8 L332.5,26.6 L335.5,23 L338.5,19.4 L340.5,27.5 L343.5,24.8 L346.5,35.6 L349.5,34.7 L351.5,31.1 L354.5,32 L357.5,24.8 L360.5,19.4 L362.5,20.3 L365.5,20.3 L368.5,20.3 L370.5,23.9 L373.5,24.8 L376.5,23 L379.5,27.5 L381.5,21.2 L384.5,30.2 L387.5,34.7 L390.5,32.9 L392.5,35.6 L395.5,37.4 L398.5,42.8 L401.5,41.9 L403.5,40.1 L406.5,37.4 L409.5,38.3 L411.5,41 L414.5,43.7 L417.5,41.9 L420.5,45.5 L422.5,45.5 L425.5,44.6 L428.5,43.7 L431.5,38.3 L433.5,36.5 L436.5,30.2 L439.5,32.9 L442.5,31.1 L444.5,36.5 L447.5,33.8 L450.5,35.6 L452.5,36.5 L455.5,32 L458.5,23 L461.5,21.2 L463.5,20.3 L466.5,27.5 L469.5,27.5 L472.5,24.8 L474.5,26.6 L477.5,23.9 L480.5,20.3 L483.5,14 L485.5,16.7 L488.5,15.8 L491.5,11.3 L493.5,14 L496.5,14 L499.5,18.5 L502.5,12.2 L504.5,14.9 L507.5,15.8 L510.5,14.9 L513.5,17.6 L513.5,90.5 L1.5,90.5 L1.5,78.8 Z" fill="#888888" stroke="#000" fill-opacity="1" stroke-width="1" stroke-opacity="0" class="amcharts-scrollbar-graph-selected-fill"></path>
                                                <path cs="100,100" d="M1.5,78.8 L4.5,80.6 L7.5,77 L10.5,76.1 L12.5,74.3 L15.5,78.8 L18.5,70.7 L21.5,69.8 L23.5,72.5 L26.5,75.2 L29.5,76.1 L31.5,74.3 L34.5,71.6 L37.5,67.1 L40.5,68.9 L42.5,64.4 L45.5,61.7 L48.5,74.3 L51.5,68.9 L53.5,70.7 L56.5,74.3 L59.5,73.4 L62.5,77.9 L64.5,77 L67.5,79.7 L70.5,83.3 L72.5,82.4 L75.5,83.3 L78.5,84.2 L81.5,86 L83.5,80.6 L86.5,78.8 L89.5,74.3 L92.5,72.5 L94.5,64.4 L97.5,60.8 L100.5,52.7 L103.5,59 L105.5,62.6 L108.5,48.2 L111.5,43.7 L113.5,49.1 L116.5,53.6 L119.5,51.8 L122.5,54.5 L124.5,55.4 L127.5,59.9 L130.5,64.4 L133.5,59.9 L135.5,57.2 L138.5,52.7 L141.5,46.4 L144.5,49.1 L146.5,48.2 L149.5,41 L152.5,37.4 L154.5,38.3 L157.5,39.2 L160.5,35.6 L163.5,37.4 L165.5,30.2 L168.5,32 L171.5,35.6 L174.5,31.1 L176.5,28.4 L179.5,26.6 L182.5,30.2 L185.5,33.8 L187.5,49.1 L190.5,61.7 L193.5,71.6 L195.5,74.3 L198.5,71.6 L201.5,65.3 L204.5,66.2 L206.5,58.1 L209.5,60.8 L212.5,62.6 L215.5,63.5 L217.5,59.9 L220.5,56.3 L223.5,57.2 L226.5,50.9 L228.5,46.4 L231.5,42.8 L234.5,39.2 L236.5,36.5 L239.5,35.6 L242.5,28.4 L245.5,30.2 L247.5,25.7 L250.5,21.2 L253.5,23 L256.5,27.5 L258.5,25.7 L261.5,27.5 L264.5,25.7 L267.5,24.8 L269.5,30.2 L272.5,29.3 L275.5,32 L278.5,26.6 L280.5,23 L283.5,23.9 L286.5,26.6 L288.5,22.1 L291.5,21.2 L294.5,17.6 L297.5,15.8 L299.5,18.5 L302.5,17.6 L305.5,12.2 L308.5,16.7 L310.5,13.1 L313.5,18.5 L316.5,12.2 L319.5,15.8 L321.5,14 L324.5,14.9 L327.5,16.7 L329.5,24.8 L332.5,26.6 L335.5,23 L338.5,19.4 L340.5,27.5 L343.5,24.8 L346.5,35.6 L349.5,34.7 L351.5,31.1 L354.5,32 L357.5,24.8 L360.5,19.4 L362.5,20.3 L365.5,20.3 L368.5,20.3 L370.5,23.9 L373.5,24.8 L376.5,23 L379.5,27.5 L381.5,21.2 L384.5,30.2 L387.5,34.7 L390.5,32.9 L392.5,35.6 L395.5,37.4 L398.5,42.8 L401.5,41.9 L403.5,40.1 L406.5,37.4 L409.5,38.3 L411.5,41 L414.5,43.7 L417.5,41.9 L420.5,45.5 L422.5,45.5 L425.5,44.6 L428.5,43.7 L431.5,38.3 L433.5,36.5 L436.5,30.2 L439.5,32.9 L442.5,31.1 L444.5,36.5 L447.5,33.8 L450.5,35.6 L452.5,36.5 L455.5,32 L458.5,23 L461.5,21.2 L463.5,20.3 L466.5,27.5 L469.5,27.5 L472.5,24.8 L474.5,26.6 L477.5,23.9 L480.5,20.3 L483.5,14 L485.5,16.7 L488.5,15.8 L491.5,11.3 L493.5,14 L496.5,14 L499.5,18.5 L502.5,12.2 L504.5,14.9 L507.5,15.8 L510.5,14.9 L513.5,17.6" fill="none" stroke-width="1" stroke-opacity="0" stroke="#888888" stroke-linejoin="round" class="amcharts-scrollbar-graph-selected-stroke"></path>
                                            </g>
                                            <g></g>
                                        </g>
                                        <g transform="translate(0,0)">
                                            <g>
                                                <path cs="100,100" d="M98.5,90.5 L98.5,90.5 L98.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.15" stroke="#FFFFFF" class="amcharts-scrollbar-grid"></path>
                                            </g>
                                            <g>
                                                <path cs="100,100" d="M265.5,90.5 L265.5,90.5 L265.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.15" stroke="#FFFFFF" class="amcharts-scrollbar-grid"></path>
                                            </g>
                                            <g>
                                                <path cs="100,100" d="M432.5,90.5 L432.5,90.5 L432.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.15" stroke="#FFFFFF" class="amcharts-scrollbar-grid"></path>
                                            </g>
                                        </g>
                                        <g transform="translate(0,0)" visibility="visible"><text y="6" fill="#FFFFFF" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(101,78.5)" class="amcharts-scrollbar-label">
                                                <tspan y="6" x="0">Sep</tspan>
                                            </text><text y="6" fill="#FFFFFF" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(268,78.5)" class="amcharts-scrollbar-label">
                                                <tspan y="6" x="0">Nov</tspan>
                                            </text><text y="6" fill="#FFFFFF" font-family="Verdana" font-size="11px" opacity="1" font-weight="bold" text-anchor="start" transform="translate(435,78.5)" class="amcharts-scrollbar-label">
                                                <tspan y="6" x="0">2013</tspan>
                                            </text></g>
                                        <rect x="0.5" y="0.5" width="515" height="90" rx="0" ry="0" stroke-width="0" fill="#000" stroke="#000" fill-opacity="0.005" stroke-opacity="0.005"></rect>
                                        <rect x="0" y="0.5" width="514" height="90" rx="0" ry="0" stroke-width="0" fill="#000" stroke="#000" fill-opacity="0.005" stroke-opacity="0.005" aria-label="Zoom chart using cursor arrows" role="menuitem" style="cursor: -webkit-grab;"></rect>
                                        <g aria-label="Zoom chart using cursor arrows" role="menuitem" transform="translate(-17,28)" visibility="visible">
                                            <image x="0" y="0" width="35" height="35" xlink:href="https://www.amcharts.com/lib/3/images/dragIconRoundBig.svg" class="amcharts-scrollbar-grip-left"></image>
                                            <rect x="0.5" y="0.5" width="25" height="90" rx="0" ry="0" stroke-width="0" fill="#000" stroke="#000" fill-opacity="0.005" stroke-opacity="0.005" transform="translate(5,-27)"></rect>
                                        </g>
                                        <g aria-label="Zoom chart using cursor arrows" role="menuitem" transform="translate(497,28)" visibility="visible">
                                            <image x="0" y="0" width="35" height="35" xlink:href="https://www.amcharts.com/lib/3/images/dragIconRoundBig.svg" class="amcharts-scrollbar-grip-right"></image>
                                            <rect x="0.5" y="0.5" width="25" height="90" rx="0" ry="0" stroke-width="0" fill="#000" stroke="#000" fill-opacity="0.005" stroke-opacity="0.005" transform="translate(5,-27)"></rect>
                                        </g>
                                        <clipPath id="AmChartsEl-6">
                                            <rect x="0" y="0" width="514" height="91" rx="0" ry="0" stroke-width="0"></rect>
                                        </clipPath>
                                    </g>
                                </g>
                                <g>
                                    <g transform="translate(0,0)" class="amcharts-graph-line amcharts-graph-g1"></g>
                                    <g transform="translate(0,0)" class="amcharts-graph-line amcharts-graph-g1"></g>
                                    <g transform="translate(40,110)" class="amcharts-graph-line amcharts-graph-g1"></g>
                                </g>
                                <g>
                                    <g></g>
                                </g>
                                <g>
                                    <g class="amcharts-value-axis value-axis-v1" transform="translate(40,0)" visibility="hidden"></g>
                                    <g class="amcharts-category-axis" transform="translate(40,110)" visibility="visible"><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(101,261.5)" class="amcharts-axis-label">
                                            <tspan y="6" x="0">Sep</tspan>
                                        </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(268,261.5)" class="amcharts-axis-label">
                                            <tspan y="6" x="0">Nov</tspan>
                                        </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" font-weight="bold" text-anchor="start" transform="translate(435,261.5)" class="amcharts-axis-label">
                                            <tspan y="6" x="0">2013</tspan>
                                        </text></g>
                                    <g class="amcharts-value-axis value-axis-v1" transform="translate(40,110)" visibility="visible"><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,248)" class="amcharts-axis-label">
                                            <tspan y="6" x="0">0</tspan>
                                        </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,198)" class="amcharts-axis-label">
                                            <tspan y="6" x="0">20</tspan>
                                        </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,148)" class="amcharts-axis-label">
                                            <tspan y="6" x="0">40</tspan>
                                        </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,99)" class="amcharts-axis-label">
                                            <tspan y="6" x="0">60</tspan>
                                        </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,49)" class="amcharts-axis-label">
                                            <tspan y="6" x="0">80</tspan>
                                        </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,-1)" class="amcharts-axis-label">
                                            <tspan y="6" x="0">100</tspan>
                                        </text></g>
                                </g>
                                <g></g>
                                <g transform="translate(40,110)"></g>
                                <g></g>
                                <g></g>
                                <clipPath id="AmChartsEl-3">
                                    <rect x="-1" y="-1" width="516" height="251" rx="0" ry="0" stroke-width="0"></rect>
                                </clipPath>
                            </svg><a href="http://www.amcharts.com" title="JavaScript charts" style="position: absolute; text-decoration: none; color: rgb(0, 0, 0); font-family: Verdana; font-size: 11px; opacity: 0.7; display: block; left: 45px; top: 115px;">JS chart by amCharts</a></div>
                        <div class="amcharts-export-menu amcharts-export-menu-top-right amExportButton">
                            <ul>
                                <li class="export-main"><a href="#"><span>menu.label.undefined</span></a>
                                    <ul>
                                        <li><a href="#"><span>Download as ...</span></a>
                                            <ul>
                                                <li><a href="#"><span>PNG</span></a></li>
                                                <li><a href="#"><span>JPG</span></a></li>
                                                <li><a href="#"><span>SVG</span></a></li>
                                                <li><a href="#"><span>PDF</span></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><span>Save as ...</span></a>
                                            <ul>
                                                <li><a href="#"><span>CSV</span></a></li>
                                                <li><a href="#"><span>XLSX</span></a></li>
                                                <li><a href="#"><span>JSON</span></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><span>Annotate ...</span></a></li>
                                        <li><a href="#"><span>Print</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-12">
        <div class="card">
            <div class="card-block">
                <div class="row">
                    <div class="col">
                        <h4>$256.23</h4>
                        <p class="text-muted">This Month</p>
                    </div>
                    <div class="col-auto">
                        <label class="label label-success">+20%</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <canvas id="this-month" style="height: 150px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="card quater-card">
            <div class="card-block">
                <h6 class="text-muted m-b-15">This Quarter</h6>
                <h4>$3,9452.50</h4>
                <p class="text-muted">$3,9452.50</p>
                <h5>87</h5>
                <p class="text-muted">Online Revenue<span class="f-right">80%</span></p>
                <div class="progress">
                    <div class="progress-bar bg-c-blue" style="width: 80%"></div>
                </div>
                <h5 class="m-t-15">68</h5>
                <p class="text-muted">Offline Revenue<span class="f-right">50%</span></p>
                <div class="progress">
                    <div class="progress-bar bg-c-green" style="width: 50%"></div>
                </div>
            </div>
        </div>
    </div>
    <!--  sale analytics end -->

    <!--  project and team member start -->
    <div class="col-xl-8 col-md-12">
        <div class="card table-card">
            <div class="card-header">
                <h5>Projects</h5>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                        <li><i class="fa fa-trash close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>
                                    <div class="chk-option">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label class="check-task">
                                                <input type="checkbox" value="">
                                                <span class="cr">
                                                    <i class="cr-icon fa fa-check txt-default"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    Assigned
                                </th>
                                <th>Name</th>
                                <th>Due Date</th>
                                <th class="text-right">Priority</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="chk-option">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label class="check-task">
                                                <input type="checkbox" value="">
                                                <span class="cr">
                                                    <i class="cr-icon fa fa-check txt-default"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="d-inline-block align-middle">
                                        <img src="assets/images/avatar-4.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                        <div class="d-inline-block">
                                            <h6>John Deo</h6>
                                            <p class="text-muted m-b-0">Graphics Designer</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Able Pro</td>
                                <td>Jun, 26</td>
                                <td class="text-right"><label class="label label-danger">Low</label></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="chk-option">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label class="check-task">
                                                <input type="checkbox" value="">
                                                <span class="cr">
                                                    <i class="cr-icon fa fa-check txt-default"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="d-inline-block align-middle">
                                        <img src="assets/images/avatar-5.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                        <div class="d-inline-block">
                                            <h6>Jenifer Vintage</h6>
                                            <p class="text-muted m-b-0">Web Designer</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Mashable</td>
                                <td>March, 31</td>
                                <td class="text-right"><label class="label label-primary">high</label></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="chk-option">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label class="check-task">
                                                <input type="checkbox" value="">
                                                <span class="cr">
                                                    <i class="cr-icon fa fa-check txt-default"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="d-inline-block align-middle">
                                        <img src="assets/images/avatar-3.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                        <div class="d-inline-block">
                                            <h6>William Jem</h6>
                                            <p class="text-muted m-b-0">Developer</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Flatable</td>
                                <td>Aug, 02</td>
                                <td class="text-right"><label class="label label-success">medium</label></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="chk-option">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label class="check-task">
                                                <input type="checkbox" value="">
                                                <span class="cr">
                                                    <i class="cr-icon fa fa-check txt-default"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="d-inline-block align-middle">
                                        <img src="assets/images/avatar-2.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                        <div class="d-inline-block">
                                            <h6>David Jones</h6>
                                            <p class="text-muted m-b-0">Developer</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Guruable</td>
                                <td>Sep, 22</td>
                                <td class="text-right"><label class="label label-primary">high</label></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-right m-r-20">
                        <a href="#!" class=" b-b-primary text-primary">View all Projects</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-12">
        <div class="card ">
            <div class="card-header">
                <h5>Team Members</h5>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                        <li><i class="fa fa-trash close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                <div class="align-middle m-b-30">
                    <img src="assets/images/avatar-2.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                    <div class="d-inline-block">
                        <h6>David Jones</h6>
                        <p class="text-muted m-b-0">Developer</p>
                    </div>
                </div>
                <div class="align-middle m-b-30">
                    <img src="assets/images/avatar-1.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                    <div class="d-inline-block">
                        <h6>David Jones</h6>
                        <p class="text-muted m-b-0">Developer</p>
                    </div>
                </div>
                <div class="align-middle m-b-30">
                    <img src="assets/images/avatar-3.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                    <div class="d-inline-block">
                        <h6>David Jones</h6>
                        <p class="text-muted m-b-0">Developer</p>
                    </div>
                </div>
                <div class="align-middle m-b-30">
                    <img src="assets/images/avatar-4.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                    <div class="d-inline-block">
                        <h6>David Jones</h6>
                        <p class="text-muted m-b-0">Developer</p>
                    </div>
                </div>
                <div class="align-middle m-b-10">
                    <img src="assets/images/avatar-5.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                    <div class="d-inline-block">
                        <h6>David Jones</h6>
                        <p class="text-muted m-b-0">Developer</p>
                    </div>
                </div>
                <div class="text-center">
                    <a href="#!" class="b-b-primary text-primary">View all Projects</a>
                </div>
            </div>
        </div>
    </div>
    <!--  project and team member end -->
</div>
<?= $this->endSection() ?>

<?= $this->section('navbar') ?>
<?= view('layouts/navbar') ?>
<?= $this->endSection() ?>

<?= $this->section('css') ?>
<!-- css -->
<?= $this->endSection() ?>


<?= $this->section('js') ?>
<!-- coding js -->
<?= $this->endSection() ?>