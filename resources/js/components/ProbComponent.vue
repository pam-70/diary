<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-9">
        <div class="mt-4 mt-lg-0">
          <div
            id="calendar"
            class="fc fc-media-screen fc-direction-ltr fc-theme-bootstrap"
            style="height: 769px"
          >

          
            <div class="fc-header-toolbar fc-toolbar fc-toolbar-ltr">
              <div class="fc-toolbar-chunk">
                <div class="btn-group">
                  <button
                    type="button"
                    title="Previous Month"
                    aria-pressed="false"
                    class="fc-prev-button btn btn-primary"
                  >
                    Выход
                  </button>
                </div>
              </div>
              <div class="fc-toolbar-chunk">
                <h2 class="fc-toolbar-title" id="fc-dom-1">Июль 2022</h2>
              </div>
              <div class="fc-toolbar-chunk">
                <div class="btn-group">
                  <button
                    type="button"
                    title="Month view"
                    aria-pressed="true"
                    class="fc-dayGridMonth-button btn btn-primary active"
                  >
                    Месяц
                  </button>
                  <button
                    type="button"
                    title="Week view"
                    aria-pressed="false"
                    class="fc-timeGridWeek-button btn btn-primary"
                  >
                    -
                  </button>
                  <button
                    type="button"
                    title="Day view"
                    aria-pressed="false"
                    class="fc-timeGridDay-button btn btn-primary"
                  >
                    +
                  </button>
                </div>
              </div>
            </div>
            <div
              aria-labelledby="fc-dom-1"
              class="fc-view-harness fc-view-harness-active"
            >
              <div class="fc-daygrid fc-dayGridMonth-view fc-view">
                <table
                  role="grid"
                  class="fc-scrollgrid table-bordered fc-scrollgrid-liquid"
                >
                  <thead role="rowgroup">
                    <tr
                      role="presentation"
                      class="fc-scrollgrid-section fc-scrollgrid-section-header"
                    >
                      <th role="presentation">
                        <div class="fc-scroller-harness">
                          <div class="fc-scroller" style="overflow: hidden">
                            <table
                              role="presentation"
                              class="fc-col-header"
                              style="width: 1165px"
                            >
                              <colgroup></colgroup>
                              <thead role="presentation"></thead>
                            </table>
                          </div>
                        </div>
                      </th>
                    </tr>
                  </thead>
                  <tbody role="rowgroup">
                    <tr
                      role="presentation"
                      class="
                        fc-scrollgrid-section
                        fc-scrollgrid-section-body
                        fc-scrollgrid-section-liquid
                      "
                    >
                      <td role="presentation">
                        <div
                          class="fc-scroller-harness fc-scroller-harness-liquid"
                        >
                          <div
                            class="fc-scroller fc-scroller-liquid-absolute"
                            style="overflow: hidden auto"
                          >
                            <div
                              class="fc-daygrid-body fc-daygrid-body-unbalanced"
                              style="width: 1165px"
                            >
                              <table
                                role="presentation"
                                class="fc-scrollgrid-sync-table"
                                style="width: 1165px; height: 665px"
                              >
                                <colgroup></colgroup>
                                <tbody role="presentation">
                                  <tr role="row">
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-sun
                                        fc-day-past
                                        fc-day-other
                                      "
                                      data-date="2022-06-26"
                                      aria-labelledby="fc-dom-206"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-scrollgrid-sync-inner">
                                          <div
                                            class="alert alert-primary"
                                            role="alert"
                                          >
                                            {{day[0]}}
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-sun
                                        fc-day-past
                                        fc-day-other
                                      "
                                      data-date="2022-06-26"
                                      aria-labelledby="fc-dom-206"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-scrollgrid-sync-inner">
                                          <div
                                            class="alert alert-primary"
                                            role="alert"
                                          >
                                            {{day[1]}}
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-sun
                                        fc-day-past
                                        fc-day-other
                                      "
                                      data-date="2022-06-26"
                                      aria-labelledby="fc-dom-206"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-scrollgrid-sync-inner">
                                          <div
                                            class="alert alert-primary"
                                            role="alert"
                                          >
                                            {{day[2]}}
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-sun
                                        fc-day-past
                                        fc-day-other
                                      "
                                      data-date="2022-06-26"
                                      aria-labelledby="fc-dom-206"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-scrollgrid-sync-inner">
                                          <div
                                            class="alert alert-primary"
                                            role="alert"
                                          >
                                            {{day[3]}}
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-sun
                                        fc-day-past
                                        fc-day-other
                                      "
                                      data-date="2022-06-26"
                                      aria-labelledby="fc-dom-206"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-scrollgrid-sync-inner">
                                          <div
                                            class="alert alert-primary"
                                            role="alert"
                                          >
                                            {{day[4]}}
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-sun
                                        fc-day-past
                                        fc-day-other
                                      "
                                      data-date="2022-06-26"
                                      aria-labelledby="fc-dom-206"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-scrollgrid-sync-inner">
                                          <div
                                            class="alert alert-primary"
                                            role="alert"
                                          >
                                           {{day[5]}}
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-sun
                                        fc-day-past
                                        fc-day-other
                                      "
                                      data-date="2022-06-26"
                                      aria-labelledby="fc-dom-206"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-scrollgrid-sync-inner">
                                          <div
                                            class="alert alert-primary"
                                            role="alert"
                                          >
                                            {{day[6]}}
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>

                                  <tr role="row">
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-sun
                                        fc-day-past
                                        fc-day-other
                                      "
                                      data-date="2022-06-26"
                                      aria-labelledby="fc-dom-206"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-206"
                                            class="fc-daygrid-day-number"
                                            aria-label="June 26, 2022"
                                            >26</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-mon
                                        fc-day-past
                                        fc-day-other
                                      "
                                      data-date="2022-06-27"
                                      aria-labelledby="fc-dom-208"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-208"
                                            class="fc-daygrid-day-number"
                                            aria-label="June 27, 2022"
                                            >27</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-tue
                                        fc-day-past
                                        fc-day-other
                                      "
                                      data-date="2022-06-28"
                                      aria-labelledby="fc-dom-210"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-210"
                                            class="fc-daygrid-day-number"
                                            aria-label="June 28, 2022"
                                            >28</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-wed
                                        fc-day-past
                                        fc-day-other
                                      "
                                      data-date="2022-06-29"
                                      aria-labelledby="fc-dom-212"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-212"
                                            class="fc-daygrid-day-number"
                                            aria-label="June 29, 2022"
                                            >29</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-thu
                                        fc-day-past
                                        fc-day-other
                                      "
                                      data-date="2022-06-30"
                                      aria-labelledby="fc-dom-214"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-214"
                                            class="fc-daygrid-day-number"
                                            aria-label="June 30, 2022"
                                            >30</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-fri
                                        fc-day-past
                                      "
                                      data-date="2022-07-01"
                                      aria-labelledby="fc-dom-216"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-216"
                                            class="fc-daygrid-day-number"
                                            aria-label="July 1, 2022"
                                            >1</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-sat
                                        fc-day-past
                                      "
                                      data-date="2022-07-02"
                                      aria-labelledby="fc-dom-218"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-218"
                                            class="fc-daygrid-day-number"
                                            aria-label="July 2, 2022"
                                            >2</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                  </tr>

                                  <tr role="row">
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-sun
                                        fc-day-past
                                      "
                                      data-date="2022-07-03"
                                      aria-labelledby="fc-dom-220"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-220"
                                            class="fc-daygrid-day-number"
                                            aria-label="July 3, 2022"
                                            >3</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-mon
                                        fc-day-past
                                      "
                                      data-date="2022-07-04"
                                      aria-labelledby="fc-dom-222"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-222"
                                            class="fc-daygrid-day-number"
                                            aria-label="July 4, 2022"
                                            >4</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-tue
                                        fc-day-past
                                      "
                                      data-date="2022-07-05"
                                      aria-labelledby="fc-dom-224"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-224"
                                            class="fc-daygrid-day-number"
                                            aria-label="July 5, 2022"
                                            >5</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-wed
                                        fc-day-past
                                      "
                                      data-date="2022-07-06"
                                      aria-labelledby="fc-dom-226"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-226"
                                            class="fc-daygrid-day-number"
                                            aria-label="July 6, 2022"
                                            >6</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-thu
                                        fc-day-past
                                      "
                                      data-date="2022-07-07"
                                      aria-labelledby="fc-dom-228"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-228"
                                            class="fc-daygrid-day-number"
                                            aria-label="July 7, 2022"
                                            >7</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-fri
                                        fc-day-past
                                      "
                                      data-date="2022-07-08"
                                      aria-labelledby="fc-dom-230"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-230"
                                            class="fc-daygrid-day-number"
                                            aria-label="July 8, 2022"
                                            >8</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-sat
                                        fc-day-past
                                      "
                                      data-date="2022-07-09"
                                      aria-labelledby="fc-dom-232"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-232"
                                            class="fc-daygrid-day-number"
                                            aria-label="July 9, 2022"
                                            >9</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                  </tr>

                                  <tr role="row">
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-sun
                                        fc-day-today
                                      "
                                      data-date="2022-07-10"
                                      aria-labelledby="fc-dom-234"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-234"
                                            class="fc-daygrid-day-number"
                                            aria-label="July 10, 2022"
                                            >10</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-event-harness"
                                            style="margin-top: 0px"
                                          >
                                            <a
                                              class="
                                                fc-daygrid-event
                                                fc-daygrid-block-event
                                                fc-h-event
                                                fc-event
                                                fc-event-draggable
                                                fc-event-resizable
                                                fc-event-start
                                                fc-event-end
                                                fc-event-today
                                                bg-danger
                                              "
                                              tabindex="0"
                                            >
                                              <div class="fc-event-main">
                                                <div
                                                  class="fc-event-main-frame"
                                                >
                                                  <div
                                                    class="
                                                      fc-event-title-container
                                                    "
                                                  >
                                                    <div
                                                      class="
                                                        fc-event-title fc-sticky
                                                      "
                                                    >
                                                      5 а - Сообщение
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div
                                                class="
                                                  fc-event-resizer
                                                  fc-event-resizer-end
                                                "
                                              >
                                                появляющая надпись
                                              </div>
                                            </a>
                                            <a
                                              class="
                                                fc-daygrid-event
                                                fc-daygrid-block-event
                                                fc-h-event
                                                fc-event
                                                fc-event-draggable
                                                fc-event-resizable
                                                fc-event-start
                                                fc-event-end
                                                fc-event-today
                                                bg-danger
                                              "
                                              tabindex="0"
                                            >
                                              <div class="fc-event-main">
                                                <div
                                                  class="fc-event-main-frame"
                                                >
                                                  <div
                                                    class="
                                                      fc-event-title-container
                                                    "
                                                  >
                                                    <div
                                                      class="
                                                        fc-event-title fc-sticky
                                                      "
                                                    >
                                                      5 а - Сообщение222
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div
                                                class="
                                                  fc-event-resizer
                                                  fc-event-resizer-end
                                                "
                                              >
                                                появляющая надпись2
                                              </div>
                                            </a>
                                          </div>
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-mon
                                        fc-day-future
                                      "
                                      data-date="2022-07-11"
                                      aria-labelledby="fc-dom-236"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-236"
                                            class="fc-daygrid-day-number"
                                            aria-label="July 11, 2022"
                                            >11</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          >
                                            44
                                          </div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>

                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-tue
                                        fc-day-future
                                      "
                                      data-date="2022-07-12"
                                      aria-labelledby="fc-dom-238"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-238"
                                            class="fc-daygrid-day-number"
                                            aria-label="July 12, 2022"
                                            >12</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-event-harness"
                                            style="margin-top: 0px"
                                          >
                                            <a
                                              class="
                                                fc-daygrid-event
                                                fc-daygrid-dot-event
                                                fc-event
                                                fc-event-draggable
                                                fc-event-resizable
                                                fc-event-start
                                                fc-event-end
                                                fc-event-future
                                                bg-info
                                              "
                                              tabindex="0"
                                            >
                                              <div
                                                class="
                                                  fc-event-resizer
                                                  fc-event-resizer-end
                                                "
                                              >
                                                появляющая надпись
                                              </div>
                                              <div
                                                class="fc-daygrid-event-dot"
                                              ></div>
                                              <div class="fc-event-time">
                                                7:53a
                                              </div>
                                              <div
                                                class="fc-event-title fc-sticky"
                                              >
                                                Завтрак
                                              </div>
                                            </a>
                                          </div>
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>

                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-wed
                                        fc-day-future
                                      "
                                      data-date="2022-07-13"
                                      aria-labelledby="fc-dom-240"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-240"
                                            class="fc-daygrid-day-number"
                                            aria-label="July 13, 2022"
                                            >13</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-thu
                                        fc-day-future
                                      "
                                      data-date="2022-07-14"
                                      aria-labelledby="fc-dom-242"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-242"
                                            class="fc-daygrid-day-number"
                                            aria-label="July 14, 2022"
                                            >14</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="
                                              fc-daygrid-event-harness
                                              fc-daygrid-event-harness-abs
                                            "
                                            style="
                                              top: 0px;
                                              left: 0px;
                                              right: -166.422px;
                                            "
                                          >
                                            <a
                                              class="
                                                fc-daygrid-event
                                                fc-daygrid-block-event
                                                fc-h-event
                                                fc-event
                                                fc-event-draggable
                                                fc-event-start
                                                fc-event-end
                                                fc-event-future
                                                bg-primary
                                              "
                                              tabindex="0"
                                            >
                                              <div class="fc-event-main">
                                                <div
                                                  class="fc-event-main-frame"
                                                >
                                                  <div class="fc-event-time">
                                                    7:06a
                                                  </div>
                                                  <div
                                                    class="
                                                      fc-event-title-container
                                                    "
                                                  >
                                                    <div
                                                      class="
                                                        fc-event-title fc-sticky
                                                      "
                                                    >
                                                      Buy Design Assets
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </a>
                                          </div>
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 38px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-fri
                                        fc-day-future
                                      "
                                      data-date="2022-07-15"
                                      aria-labelledby="fc-dom-244"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-244"
                                            class="fc-daygrid-day-number"
                                            aria-label="July 15, 2022"
                                            >15</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 38px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-sat
                                        fc-day-future
                                      "
                                      data-date="2022-07-16"
                                      aria-labelledby="fc-dom-246"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-246"
                                            class="fc-daygrid-day-number"
                                            aria-label="July 16, 2022"
                                            >16</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr role="row">
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-sun
                                        fc-day-future
                                      "
                                      data-date="2022-07-17"
                                      aria-labelledby="fc-dom-248"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-248"
                                            class="fc-daygrid-day-number"
                                            aria-label="July 17, 2022"
                                            >17</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-mon
                                        fc-day-future
                                      "
                                      data-date="2022-07-18"
                                      aria-labelledby="fc-dom-250"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-250"
                                            class="fc-daygrid-day-number"
                                            aria-label="July 18, 2022"
                                            >18</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-tue
                                        fc-day-future
                                      "
                                      data-date="2022-07-19"
                                      aria-labelledby="fc-dom-252"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-252"
                                            class="fc-daygrid-day-number"
                                            aria-label="July 19, 2022"
                                            >19</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-wed
                                        fc-day-future
                                      "
                                      data-date="2022-07-20"
                                      aria-labelledby="fc-dom-254"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-254"
                                            class="fc-daygrid-day-number"
                                            aria-label="July 20, 2022"
                                            >20</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-thu
                                        fc-day-future
                                      "
                                      data-date="2022-07-21"
                                      aria-labelledby="fc-dom-256"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-256"
                                            class="fc-daygrid-day-number"
                                            aria-label="July 21, 2022"
                                            >21</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-fri
                                        fc-day-future
                                      "
                                      data-date="2022-07-22"
                                      aria-labelledby="fc-dom-258"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-258"
                                            class="fc-daygrid-day-number"
                                            aria-label="July 22, 2022"
                                            >22</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-sat
                                        fc-day-future
                                      "
                                      data-date="2022-07-23"
                                      aria-labelledby="fc-dom-260"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-260"
                                            class="fc-daygrid-day-number"
                                            aria-label="July 23, 2022"
                                            >23</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr role="row">
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-sun
                                        fc-day-future
                                      "
                                      data-date="2022-07-24"
                                      aria-labelledby="fc-dom-262"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-262"
                                            class="fc-daygrid-day-number"
                                            aria-label="July 24, 2022"
                                            >24</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-mon
                                        fc-day-future
                                      "
                                      data-date="2022-07-25"
                                      aria-labelledby="fc-dom-264"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-264"
                                            class="fc-daygrid-day-number"
                                            aria-label="July 25, 2022"
                                            >25</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-tue
                                        fc-day-future
                                      "
                                      data-date="2022-07-26"
                                      aria-labelledby="fc-dom-266"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-266"
                                            class="fc-daygrid-day-number"
                                            aria-label="July 26, 2022"
                                            >26</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-wed
                                        fc-day-future
                                      "
                                      data-date="2022-07-27"
                                      aria-labelledby="fc-dom-268"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-268"
                                            class="fc-daygrid-day-number"
                                            aria-label="July 27, 2022"
                                            >27</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-thu
                                        fc-day-future
                                      "
                                      data-date="2022-07-28"
                                      aria-labelledby="fc-dom-270"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-270"
                                            class="fc-daygrid-day-number"
                                            aria-label="July 28, 2022"
                                            >28</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-fri
                                        fc-day-future
                                      "
                                      data-date="2022-07-29"
                                      aria-labelledby="fc-dom-272"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-272"
                                            class="fc-daygrid-day-number"
                                            aria-label="July 29, 2022"
                                            >29</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-sat
                                        fc-day-future
                                      "
                                      data-date="2022-07-30"
                                      aria-labelledby="fc-dom-274"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-274"
                                            class="fc-daygrid-day-number"
                                            aria-label="July 30, 2022"
                                            >30</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr role="row">
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-sun
                                        fc-day-future
                                      "
                                      data-date="2022-07-31"
                                      aria-labelledby="fc-dom-276"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-276"
                                            class="fc-daygrid-day-number"
                                            aria-label="July 31, 2022"
                                            >31</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-mon
                                        fc-day-future
                                        fc-day-other
                                      "
                                      data-date="2022-08-01"
                                      aria-labelledby="fc-dom-278"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-278"
                                            class="fc-daygrid-day-number"
                                            aria-label="August 1, 2022"
                                            >1</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-tue
                                        fc-day-future
                                        fc-day-other
                                      "
                                      data-date="2022-08-02"
                                      aria-labelledby="fc-dom-280"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-280"
                                            class="fc-daygrid-day-number"
                                            aria-label="August 2, 2022"
                                            >2</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-wed
                                        fc-day-future
                                        fc-day-other
                                      "
                                      data-date="2022-08-03"
                                      aria-labelledby="fc-dom-282"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-282"
                                            class="fc-daygrid-day-number"
                                            aria-label="August 3, 2022"
                                            >3</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-thu
                                        fc-day-future
                                        fc-day-other
                                      "
                                      data-date="2022-08-04"
                                      aria-labelledby="fc-dom-284"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-284"
                                            class="fc-daygrid-day-number"
                                            aria-label="August 4, 2022"
                                            >4</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-fri
                                        fc-day-future
                                        fc-day-other
                                      "
                                      data-date="2022-08-05"
                                      aria-labelledby="fc-dom-286"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-286"
                                            class="fc-daygrid-day-number"
                                            aria-label="August 5, 2022"
                                            >5</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                    <td
                                      role="gridcell"
                                      class="
                                        fc-daygrid-day
                                        fc-day
                                        fc-day-sat
                                        fc-day-future
                                        fc-day-other
                                      "
                                      data-date="2022-08-06"
                                      aria-labelledby="fc-dom-288"
                                    >
                                      <div
                                        class="
                                          fc-daygrid-day-frame
                                          fc-scrollgrid-sync-inner
                                        "
                                      >
                                        <div class="fc-daygrid-day-top">
                                          <a
                                            id="fc-dom-288"
                                            class="fc-daygrid-day-number"
                                            aria-label="August 6, 2022"
                                            >6</a
                                          >
                                        </div>
                                        <div class="fc-daygrid-day-events">
                                          <div
                                            class="fc-daygrid-day-bottom"
                                            style="margin-top: 0px"
                                          ></div>
                                        </div>
                                        <div class="fc-daygrid-day-bg"></div>
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
//import jspdf from 'jspdf';
export default {
  data: function () {
    return {
      day: ["ПН", "ВТ", "СР", "ЧТ", "ПТ", "СБ", "ВС"],
      currentTab: "lists",
      istitutation: [],
      selected: "",
      institution: [],
      surname: "",
      surnameres: "",
      asc: 1,
      del: 0,
      bat: "Сохранить",
      user_id: "",
      choice: 1,
      rezult: [],
      lastin: "",
      fsurname: "",
      html: "",
      istitut_id: "",
    };
  },
  mounted() {
    // this.selectedLang = this.items[0].value;
    this.update();
    //this.addanswer();
  },
  methods: {
    print_result: function (rez_id) {
      console.log(rez_id);
      const data_form = {
        id_result: rez_id,
      };
      axios.get("/print_result", data_form).then((response) => {
        // console.log(response.data.url_i);
      });
    },
    filtersurname: function () {
      const data_form = {
        id_institution: this.selected,
        asc: this.asc,
        del: this.del,
        surname: this.lastin,
      };
      axios.post("/filter_surname", data_form).then((response) => {
        this.institution = response.data.url_institution;
      });
    },

    admin_result: function (id) {
      const data_form = {
        user_id: id,
        choice: this.choice,
      };
      axios.post("/admin_result", data_form).then((response) => {
        // console.log(response.data.url_surnameres);
        this.rezult = response.data.url_rezult;
        this.surnameres = response.data.url_surnameres;
        //this.surname = response.data.url_user;
      });
    },
    swon_user: function (id) {
      this.bat = "Сохранить";
      this.user_id = id;
      const data_form = {
        user_id: id,
      };
      axios.post("/swon_user", data_form).then((response) => {
        this.user_id = response.data.url_user_id;
        this.surname = response.data.url_user;
      });
    },
    addlist: function () {
      if (this.bat === "Добавить") {
        const data_form = {
          id_institution: this.selected,
          surname: this.surname,
        };
        axios.post("/add_user", data_form).then((response) => {});
      }
      if (this.bat === "Сохранить") {
        //console.log("Сработало сохранить");
        const data_form = {
          id_institution: this.selected,
          surname: this.surname,
          del: this.del,
          user_id: this.user_id,
        };
        axios.post("/updat_user", data_form).then((response) => {});
      }
      this.showlist();
    },
    namebat: function () {
      this.bat = "Добавить";
    },

    update: function () {
      axios.post("/adm_updat").then((response) => {
        this.istitutation = response.data.url_istitutation;
      });
    },
    showlist: function () {
      this.istitut_id = this.selected;
      const data_form = {
        id_institution: this.selected,
        asc: this.asc,
        del: this.del,
      };
      axios.post("/show_list", data_form).then((response) => {
        this.institution = response.data.url_institution;
      });
    },
    lists: function () {
      this.currentTab = "lists";
    },
  },
};
</script>
