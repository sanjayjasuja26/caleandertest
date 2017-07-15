@extends('layouts.default')

@section('content')
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2><i class="fa fa-calendar" aria-hidden="true"></i>Caleander</h2>
                    <!-- <ol class="breadcrumb">
                        <li>
                            <a href="index.html">This is</a>
                        </li>
                        <li class="active">
                            <strong>Breadcrumb</strong>
                        </li>
                    </ol> -->
                </div>
                <!-- <div class="col-sm-8">
                    <div class="title-action">
                        <a href="" class="btn btn-primary">This is action area</a>
                    </div>
                </div> -->
            </div>
            <!-- <div class="col-lg-9">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Striped Table </h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div id="calendar" class="fc fc-ltr fc-unthemed">
                              <div class="fc-toolbar">
                                <div class="fc-left">
                                  <div class="fc-button-group">
                                    <button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left">
                                      <span class="fc-icon fc-icon-left-single-arrow"></span>
                                    </button>
                                    <button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right">
                                      <span class="fc-icon fc-icon-right-single-arrow"></span>
                                    </button>
                                  </div>
                                  <button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" disabled="disabled">today</button>
                                </div>
                                <div class="fc-right">
                                  <div class="fc-button-group">
                                    <button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">month</button>
                                    <button type="button" class="fc-agendaWeek-button fc-button fc-state-default">week</button>
                                    <button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-right">day</button>
                                  </div>
                                </div>
                                <div class="fc-center">
                                  <h2>July 2017</h2>
                                </div>
                                <div class="fc-clear">
                                </div>
                              </div>
                              <div class="fc-view-container" style="">
                                <div class="fc-view fc-month-view fc-basic-view" style="">
                                  <table>
                                    <thead>
                                      <tr>
                                        <td class="fc-widget-header">
                                          <div class="fc-row fc-widget-header">
                                            <table>
                                              <thead>
                                                <tr>
                                                  <th class="fc-day-header fc-widget-header fc-sun">Sun</th>
                                                  <th class="fc-day-header fc-widget-header fc-mon">Mon</th>
                                                  <th class="fc-day-header fc-widget-header fc-tue">Tue</th>
                                                  <th class="fc-day-header fc-widget-header fc-wed">Wed</th>
                                                  <th class="fc-day-header fc-widget-header fc-thu">Thu</th>
                                                  <th class="fc-day-header fc-widget-header fc-fri">Fri</th>
                                                  <th class="fc-day-header fc-widget-header fc-sat">Sat</th>
                                                </tr>
                                              </thead>
                                            </table>
                                          </div>
                                        </td>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td class="fc-widget-content">
                                          <div class="fc-day-grid-container" style="">
                                            <div class="fc-day-grid">
                                              <div class="fc-row fc-week fc-widget-content" style="height: 84px;">
                                                <div class="fc-bg">
                                                  <table>
                                                    <tbody>
                                                      <tr>
                                                        <td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2017-06-25"></td>
                                                        <td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2017-06-26"></td>
                                                        <td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2017-06-27"></td>
                                                        <td class="fc-day fc-widget-content fc-wed fc-other-month fc-past" data-date="2017-06-28"></td>
                                                        <td class="fc-day fc-widget-content fc-thu fc-other-month fc-past" data-date="2017-06-29"></td>
                                                        <td class="fc-day fc-widget-content fc-fri fc-other-month fc-past" data-date="2017-06-30"></td>
                                                        <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2017-07-01"></td>
                                                      </tr>
                                                    </tbody>
                                                  </table>
                                                </div>
                                                <div class="fc-content-skeleton">
                                                    <table>
                                                      <thead>
                                                        <tr>
                                                          <td class="fc-day-number fc-sun fc-other-month fc-past" data-date="2017-06-25">25</td>
                                                          <td class="fc-day-number fc-mon fc-other-month fc-past" data-date="2017-06-26">26</td>
                                                          <td class="fc-day-number fc-tue fc-other-month fc-past" data-date="2017-06-27">27</td>
                                                          <td class="fc-day-number fc-wed fc-other-month fc-past" data-date="2017-06-28">28</td>
                                                          <td class="fc-day-number fc-thu fc-other-month fc-past" data-date="2017-06-29">29</td>
                                                          <td class="fc-day-number fc-fri fc-other-month fc-past" data-date="2017-06-30">30</td>
                                                          <td class="fc-day-number fc-sat fc-past" data-date="2017-07-01">1</td>
                                                        </tr></thead>
                                                        <tbody>
                                                          <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td class="fc-event-container">
                                                              <a class="fc-day-grid-event fc-event fc-start fc-end fc-draggable">
                                                                <div class="fc-content">
                                                                  <span class="fc-time">12a</span>
                                                                   <span class="fc-title">All Day Event</span>
                                                                 </div>
                                                               </a>
                                                             </td>
                                                           </tr>
                                                         </tbody>
                                                       </table>
                                                     </div>
                                                   </div>
                                                   <div class="fc-row fc-week fc-widget-content" style="height: 84px;">
                                                     <div class="fc-bg">
                                                       <table>
                                                         <tbody>
                                                           <tr>
                                                             <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2017-07-02"></td>
                                                             <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2017-07-03"></td>
                                                             <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2017-07-04"></td>
                                                             <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2017-07-05"></td>
                                                             <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2017-07-06"></td>
                                                             <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2017-07-07"></td>
                                                             <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2017-07-08"></td>
                                                           </tr>
                                                         </tbody>
                                                       </table>
                                                     </div>
                                                     <div class="fc-content-skeleton">
                                                       <table>
                                                         <thead>
                                                           <tr>
                                                             <td class="fc-day-number fc-sun fc-past" data-date="2017-07-02">2</td>
                                                             <td class="fc-day-number fc-mon fc-past" data-date="2017-07-03">3</td>
                                                             <td class="fc-day-number fc-tue fc-past" data-date="2017-07-04">4</td>
                                                             <td class="fc-day-number fc-wed fc-past" data-date="2017-07-05">5</td>
                                                             <td class="fc-day-number fc-thu fc-past" data-date="2017-07-06">6</td>
                                                             <td class="fc-day-number fc-fri fc-past" data-date="2017-07-07">7</td>
                                                             <td class="fc-day-number fc-sat fc-past" data-date="2017-07-08">8</td>
                                                           </tr>
                                                         </thead>
                                                         <tbody>
                                                           <tr>
                                                             <td>
                                                             </td>
                                                             <td>
                                                             </td>
                                                             <td></td>
                                                             <td></td>
                                                             <td></td>
                                                             <td></td>
                                                             <td></td>
                                                           </tr></tbody>
                                                         </table>
                                                       </div>
                                                     </div>
                                                     <div class="fc-row fc-week fc-widget-content" style="height: 84px;">
                                                       <div class="fc-bg">
                                                         <table>
                                                           <tbody>
                                                             <tr>
                                                               <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2017-07-09"></td>
                                                               <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2017-07-10"></td>
                                                               <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2017-07-11"></td>
                                                               <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2017-07-12"></td>
                                                               <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2017-07-13"></td>
                                                               <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2017-07-14"></td>
                                                               <td class="fc-day fc-widget-content fc-sat fc-today fc-state-highlight" data-date="2017-07-15"></td>
                                                             </tr>
                                                           </tbody>
                                                         </table>
                                                       </div>
                                                       <div class="fc-content-skeleton">
                                                         <table>
                                                           <thead>
                                                             <tr>
                                                               <td class="fc-day-number fc-sun fc-past" data-date="2017-07-09">9</td>
                                                               <td class="fc-day-number fc-mon fc-past" data-date="2017-07-10">10</td>
                                                               <td class="fc-day-number fc-tue fc-past" data-date="2017-07-11">11</td>
                                                               <td class="fc-day-number fc-wed fc-past" data-date="2017-07-12">12</td>
                                                               <td class="fc-day-number fc-thu fc-past" data-date="2017-07-13">13</td>
                                                               <td class="fc-day-number fc-fri fc-past" data-date="2017-07-14">14</td>
                                                               <td class="fc-day-number fc-sat fc-today fc-state-highlight" data-date="2017-07-15">15</td>
                                                             </tr>
                                                           </thead>
                                                           <tbody>
                                                             <tr>
                                                               <td rowspan="2"></td>
                                                               <td class="fc-event-container" colspan="3">
                                                                 <a class="fc-day-grid-event fc-event fc-start fc-end fc-draggable">
                                                                   <div class="fc-content">
                                                                     <span class="fc-time">12a</span>
                                                                      <span class="fc-title">Long Event</span>
                                                                    </div>
                                                                  </a>
                                                                </td>
                                                                <td rowspan="2"></td>
                                                                <td rowspan="2"></td>
                                                                <td class="fc-event-container">
                                                                  <a class="fc-day-grid-event fc-event fc-start fc-end fc-draggable">
                                                                    <div class="fc-content">
                                                                      <span class="fc-time">10:30a</span>
                                                                       <span class="fc-title">Meeting</span>
                                                                     </div>
                                                                   </a>
                                                                 </td>
                                                               </tr>
                                                               <tr>
                                                                 <td></td>
                                                                 <td></td>
                                                                 <td class="fc-event-container">
                                                                   <a class="fc-day-grid-event fc-event fc-start fc-end fc-draggable">
                                                                     <div class="fc-content">
                                                                       <span class="fc-time">4p</span>
                                                                        <span class="fc-title">Repeating Event</span>
                                                                      </div>
                                                                    </a>
                                                                  </td>
                                                                  <td class="fc-event-container">
                                                                    <a class="fc-day-grid-event fc-event fc-start fc-end fc-draggable">
                                                                      <div class="fc-content">
                                                                        <span class="fc-time">12p</span>
                                                                        <span class="fc-title">Lunch</span>
                                                                      </div>
                                                                    </a>
                                                                  </td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </div>
                                                        </div>
                                                        <div class="fc-row fc-week fc-widget-content" style="height: 84px;">
                                                          <div class="fc-bg">
                                                            <table>
                                                              <tbody>
                                                                <tr>
                                                                  <td class="fc-day fc-widget-content fc-sun fc-future" data-date="2017-07-16"></td>
                                                                  <td class="fc-day fc-widget-content fc-mon fc-future" data-date="2017-07-17"></td>
                                                                  <td class="fc-day fc-widget-content fc-tue fc-future" data-date="2017-07-18"></td>
                                                                  <td class="fc-day fc-widget-content fc-wed fc-future" data-date="2017-07-19"></td>
                                                                  <td class="fc-day fc-widget-content fc-thu fc-future" data-date="2017-07-20"></td>
                                                                  <td class="fc-day fc-widget-content fc-fri fc-future" data-date="2017-07-21"></td>
                                                                  <td class="fc-day fc-widget-content fc-sat fc-future" data-date="2017-07-22"></td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </div>
                                                          <div class="fc-content-skeleton">
                                                            <table>
                                                              <thead>
                                                                <tr>
                                                                  <td class="fc-day-number fc-sun fc-future" data-date="2017-07-16">16</td>
                                                                  <td class="fc-day-number fc-mon fc-future" data-date="2017-07-17">17</td>
                                                                  <td class="fc-day-number fc-tue fc-future" data-date="2017-07-18">18</td>
                                                                  <td class="fc-day-number fc-wed fc-future" data-date="2017-07-19">19</td>
                                                                  <td class="fc-day-number fc-thu fc-future" data-date="2017-07-20">20</td>
                                                                  <td class="fc-day-number fc-fri fc-future" data-date="2017-07-21">21</td>
                                                                  <td class="fc-day-number fc-sat fc-future" data-date="2017-07-22">22</td>
                                                                </tr>
                                                              </thead>
                                                              <tbody>
                                                                <tr>
                                                                  <td class="fc-event-container">
                                                                    <a class="fc-day-grid-event fc-event fc-start fc-end fc-draggable">
                                                                      <div class="fc-content">
                                                                        <span class="fc-time">7p</span>
                                                                         <span class="fc-title">Birthday Party</span>
                                                                       </div>
                                                                     </a>
                                                                   </td>
                                                                   <td>
                                                                   </td>
                                                                   <td>
                                                                   </td>
                                                                   <td class="fc-event-container">
                                                                     <a class="fc-day-grid-event fc-event fc-start fc-end fc-draggable">
                                                                       <div class="fc-content">
                                                                         <span class="fc-time">4p</span>
                                                                          <span class="fc-title">Repeating Event</span>
                                                                        </div>
                                                                      </a>
                                                                    </td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                  </tr>
                                                                </tbody>
                                                              </table>
                                                            </div>
                                                          </div>
                                                          <div class="fc-row fc-week fc-widget-content" style="height: 84px;">
                                                            <div class="fc-bg">
                                                              <table>
                                                                <tbody>
                                                                  <tr>
                                                                    <td class="fc-day fc-widget-content fc-sun fc-future" data-date="2017-07-23"></td>
                                                                    <td class="fc-day fc-widget-content fc-mon fc-future" data-date="2017-07-24">
                                                                    </td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2017-07-25"></td>
                                                                    <td class="fc-day fc-widget-content fc-wed fc-future" data-date="2017-07-26"></td>
                                                                    <td class="fc-day fc-widget-content fc-thu fc-future" data-date="2017-07-27"></td>
                                                                    <td class="fc-day fc-widget-content fc-fri fc-future" data-date="2017-07-28"></td>
                                                                    <td class="fc-day fc-widget-content fc-sat fc-future" data-date="2017-07-29"></td>
                                                                  </tr>
                                                                </tbody>
                                                              </table>
                                                            </div>
                                                            <div class="fc-content-skeleton">
                                                              <table>
                                                                <thead>
                                                                  <tr>
                                                                    <td class="fc-day-number fc-sun fc-future" data-date="2017-07-23">23</td>
                                                                    <td class="fc-day-number fc-mon fc-future" data-date="2017-07-24">24</td>
                                                                    <td class="fc-day-number fc-tue fc-future" data-date="2017-07-25">25</td>
                                                                    <td class="fc-day-number fc-wed fc-future" data-date="2017-07-26">26</td>
                                                                    <td class="fc-day-number fc-thu fc-future" data-date="2017-07-27">27</td>
                                                                    <td class="fc-day-number fc-fri fc-future" data-date="2017-07-28">28</td>
                                                                    <td class="fc-day-number fc-sat fc-future" data-date="2017-07-29">29</td>
                                                                  </tr>
                                                                </thead>
                                                                <tbody>
                                                                  <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td class="fc-event-container">
                                                                      <a class="fc-day-grid-event fc-event fc-start fc-end fc-draggable" href="http://google.com/">
                                                                        <div class="fc-content"><span class="fc-time">12a</span>
                                                                           <span class="fc-title">Click for Google</span>
                                                                         </div>
                                                                       </a>
                                                                     </td>
                                                                     <td></td>
                                                                   </tr>
                                                                 </tbody>
                                                               </table>
                                                             </div>
                                                           </div>
                                                           <div class="fc-row fc-week fc-widget-content" style="height: 88px;">
                                                             <div class="fc-bg">
                                                               <table>
                                                                 <tbody>
                                                                   <tr>
                                                                     <td class="fc-day fc-widget-content fc-sun fc-future" data-date="2017-07-30"></td>
                                                                     <td class="fc-day fc-widget-content fc-mon fc-future" data-date="2017-07-31"></td>
                                                                     <td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2017-08-01"></td>
                                                                     <td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2017-08-02"></td>
                                                                     <td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2017-08-03"></td>
                                                                     <td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2017-08-04"></td>
                                                                     <td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2017-08-05"></td>
                                                                   </tr>
                                                                 </tbody>
                                                               </table>
                                                             </div>
                                                             <div class="fc-content-skeleton">
                                                               <table>
                                                                 <thead>
                                                                   <tr>
                                                                     <td class="fc-day-number fc-sun fc-future" data-date="2017-07-30">30</td>
                                                                     <td class="fc-day-number fc-mon fc-future" data-date="2017-07-31">31</td>
                                                                     <td class="fc-day-number fc-tue fc-other-month fc-future" data-date="2017-08-01">1</td>
                                                                     <td class="fc-day-number fc-wed fc-other-month fc-future" data-date="2017-08-02">2</td>
                                                                     <td class="fc-day-number fc-thu fc-other-month fc-future" data-date="2017-08-03">3</td>
                                                                     <td class="fc-day-number fc-fri fc-other-month fc-future" data-date="2017-08-04">4</td>
                                                                     <td class="fc-day-number fc-sat fc-other-month fc-future" data-date="2017-08-05">5</td>
                                                                   </tr>
                                                                 </thead>
                                                                 <tbody>
                                                                   <tr>
                                                                     <td></td>
                                                                     <td></td>
                                                                     <td></td>
                                                                     <td></td>
                                                                     <td></td>
                                                                     <td></td>
                                                                     <td></td>
                                                                   </tr>
                                                                 </tbody>
                                                               </table>
                                                             </div>
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
                </div> -->

                  <div id="calendarCantainer" class="calendarStyle"></div>

  @endsection

  @section('extra_script')
<script type="text/javascript">
$(document).ready(function() {

		$('#calendarCantainer').fullCalendar({

		});

	});
</script>
@endsection
