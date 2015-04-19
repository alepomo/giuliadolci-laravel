@extends('master')
  
  @section('content')
    <!-- PAGE -->
    <div class="page-container">
      <!-- SHOWCASE -->
      <section class="post">
        <div class="section-container">
        <div class="text">
          <h1 class="p1 type-serif title">{{ $post->title }}</h1>
          <p class="p2 type-sans description">
            {{ $post->description }}
          </p>
          <p class="p3 type-sans notes">
            {{ $post->notes }}
          </p>
        </div>
        
          <!-- SHOWCASE -->
          <section class="slider">
            <ul class="slideshow">
              <li>
                <img src="../content/img/HB_DR.jpg" alt="HB_DR" />
              </li>
              <li>
                <img src="../content/img/HB_JMG-PP.jpg" alt="HB_JMG-PP" />
              </li>
              <li>
                <img src="../content/img/HB_RK.jpg" alt="HB_RK" />
              </li>
            </ul>
          </section>
          <!-- END SHOWCASE -->
        </div>
      </section>
      <!-- END SHOWCASE -->
    </div>
    <!-- END PAGE --  @stop