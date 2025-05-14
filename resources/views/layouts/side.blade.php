@php
  $navs = [
    [
      'title'=>'Leather',
      'link'=>'',
      'sub_nav'=>[
        [
          'title'=>'Leather audit',
          'link'=>'',
          'body_nav'=>[],
        ],
      ],
    ],
    [
      'title'=>'Textile / Fabric',
      'link'=>'',
      'sub_nav'=>[
        [
          'title'=>'testing',
          'link'=>'',
          'body_nav'=>[],
        ],
        [
          'title'=>'audit',
          'link'=>'',
          'body_nav'=>[],
        ],
        [
          'title'=>'approval',
          'link'=>'',
          'body_nav'=>[],
        ],
        [
          'title'=>'optional (100% inspection)',
          'link'=>'',
          'body_nav'=>[],
        ],
      ],
    ],
    [
      'title'=>'Accessory',
      'link'=>'',
      'sub_nav'=>[
        [
          'title'=>'sewing trim',
          'link'=>'',
          'body_nav'=>[
            [
              'title'=>'optional( testing )',
              'link'=>'',
            ]
          ],
          'body_nav'=>[
            [
              'title'=>'audit',
              'link'=>'',
            ]
          ],
          'body_nav'=>[
            [
              'title'=>'approval',
              'link'=>'',
            ]
          ],
          'body_nav'=>[
            [
              'title'=>'optional( 100% inspection )',
              'link'=>'',
            ]
          ],
        ],
        [
          'title'=>'Packing Material',
          'link'=>'',
          'body_nav'=>[
            [
              'title'=>'optional( testing )',
              'link'=>'',
            ]
          ],
          'body_nav'=>[
            [
              'title'=>'audit',
              'link'=>'',
            ]
          ],
          'body_nav'=>[
            [
              'title'=>'approval',
              'link'=>'',
            ]
          ],
          'body_nav'=>[
            [
              'title'=>'optional( 100% inspection )',
              'link'=>'',
            ]
          ],
        ],
        [
          'title'=>'Hardware',
          'link'=>'',
          'body_nav'=>[
            [
              'title'=>'optional( testing )',
              'link'=>'',
            ]
          ],
          'body_nav'=>[
            [
              'title'=>'audit',
              'link'=>'',
            ]
          ],
          'body_nav'=>[
            [
              'title'=>'approval',
              'link'=>'',
            ]
          ],
          'body_nav'=>[
            [
              'title'=>'optional( 100% inspection )',
              'link'=>'',
            ]
          ],
        ],
      ],
    ],
  ];
@endphp
<!-- <ul>
  @foreach($navs as $nav)
    <li><a href="#" class="text-lg font-bold">{{$nav['title']}}</a></li>
    <li>
      <ul class="px-5">
        @foreach($nav['sub_nav'] as $sub_nav)
          <li><a href="#" class="text-sm font-semibold">{{$sub_nav['title']}}</a></li>
          <li>
            <ul class="px-5">
              @foreach($sub_nav['body_nav'] as $body_nav)
              <li> <a href="#">{{$body_nav['title']}}</a> </li>
              @endforeach
            </ul>
          </li>
        @endforeach
      </ul>
    </li>
  @endforeach
</ul> -->

<ul>


  <!-- -------------------------- Leather ------------------------ -->
  <li><h3 class="font-bold text-lg {{ request()->routeIs('leather::*') ? 'text-blue-500':''}}"> Leather </h3></li>
  <li>
    <ul class="px-5">
        <li>
            <a href="{{ route('leather::leather-audit.page') }}" disable class="text-sm font-semibold {{ request()->routeIs('leather::leather-audit.page') ? 'text-yellow-500':''}}">
                 Leather audit
                </a>
        </li>
    </ul>
  </li>

    <!-- ----------------------- Accessory ------------------------ -->
    <li><h3 class="text-lg font-bold {{ request()->routeIs('accessory::*') ? 'text-blue-500':'' }}">Accessory</h3></li>
    <li class="px-5"><a href="{{ route('accessory::sewing-trim') }}" class="btn btn-xs {{ request()->routeIs('accessory::sewing-trim.*') ? 'btn-primary':'btn-ghost' }}"> Sewing  </a></li>
    <li class="px-5"><a href="{{ route('accessory::packing-material') }}" class="btn btn-xs {{ request()->routeIs('accessory::packing-material.*') ? 'btn-primary':'btn-ghost' }}"> Packing Material </a></li>
    <li class="px-5"><a href="{{ route('accessory::hardware') }}" class="btn btn-xs {{ request()->routeIs('accessory::hardware.*') ? 'btn-primary':'btn-ghost' }}"> Hardware  </a></li>

    <!-- ----------------------- Process QC module ------------------------ -->
    <li><h3 class="text-lg font-bold {{ request()->routeIs('processqcmodule::*') ? 'text-green-700 bg-green-100 p-3':'' }}"> Process QC module </h3></li>
    <li>
      <ul class="px-5">
          <li class="flex items-center space-x-2 font-semibold {{request()->routeIs('processqcmodule::cutting.*') ? 'text-blue-700':''}}">
            @if(request()->routeIs('processqcmodule::cutting.*'))
            <x-heroicon-o-folder-open class="w-5 h-5" />
            @else
            <x-heroicon-o-folder class="w-5 h-5" />
            @endif
            <h3> CUTTING  </h3>
            </li>
          <li>
            <ul class="px-5">
                <li><a href="{{ route('processqcmodule::cutting.inline-audit') }}" class="btn btn-xs {{ request()->routeIs('processqcmodule::cutting.inline-audit.*') ? 'btn-primary':'btn-ghost' }}"> Inline audit  </a></li>
                <li><a href="{{ route('processqcmodule::cutting.endline-inspection') }}" class="btn btn-xs {{ request()->routeIs('processqcmodule::cutting.endline-inspection.*') ? 'btn-primary':'btn-ghost' }}"> endline 100% inspection  </a></li>
            </ul>
          </li>
      </ul>
    </li>

    <li>
      <ul class="px-5">
          <li><a class="font-semibold"> Embellishment </li>
      </ul>
    </li>
    <li>
      <ul class="px-5">
          <li><a href="#" class="text-sm font-semibold"> Inline audit </a></li>
          <li>
            <ul class="px-5">
              <li> <a href="#"> Audit </a> </li>
            </ul>
          </li>
      </ul>
    </li>
    <li>
      <ul class="px-5">
          <li><a href="#" class="text-sm font-semibold">100% inspection </a></li>
          <li>
            <ul class="px-5">
              <li> <a href="#"> Endline Module </a> </li>
            </ul>
          </li>
      </ul>
    </li>
    <li>
      <ul class="px-5">
          <li><a href="#" class="text-sm font-semibold"> Pre-assembly / Sewing Offline  </a></li>
      </ul>
    </li>
    <li>
      <ul class="px-5">
          <li><a href="#" class="text-sm font-semibold"> inline audit  </a></li>
          <li>
            <ul class="px-5">
              <li> <a href="#"> Offline module </a> </li>
            </ul>
          </li>
      </ul>
    </li>
    <li>
      <ul class="px-5">
          <li><a href="#" class="text-sm font-semibold">sewing 100% inspection </a></li>
          <li>
            <ul class="px-5">
              <li> <a href="#"> Endline Module </a> </li>
            </ul>
          </li>
      </ul>
    </li>
    <li>
      <ul class="">
        <li class="flex items-center space-x-2 font-semibold p-2 {{ request()->routeIs('processqcmodule::assembly/sewing-online.*') ? 'text-blue-700':'' }}">
            @if(request()->routeIs('processqcmodule::assembly/sewing-online.*'))
            <x-heroicon-o-folder-open class="w-5 h-5" />
            @else
            <x-heroicon-o-folder class="w-5 h-5" />
            @endif
            <h3>  Assembly / Sewing Online  </h3>
        </li>
      </ul>
    </li>
    <li>
      <ul class="px-5">
        <li class="flex text-sm items-center space-x-2 font-semibold p-2 {{ request()->routeIs('processqcmodule::assembly/sewing-online.inline-audit.*') ? 'text-blue-700':'' }}">
            @if(request()->routeIs('processqcmodule::assembly/sewing-online.inline-audit.*'))
            <x-heroicon-o-folder-open class="w-5 h-5" />
            @else
            <x-heroicon-o-folder class="w-5 h-5" />
            @endif
            <h3> Inline Audit  </a>
        </li>
        <li>
            <ul class="ml-5">
                <li>
                    <a href="" class="capitalize btn btn-xs btn-ghost">
                        @if(request()->routeIs('processqcmodule::assembly/sewing-online.inline-audit.measurement-audit.*'))
                            <x-heroicon-o-play class="w-5 h-5 text-green-700" />
                        @else <x-heroicon-o-play class="w-5 h-5" /> @endif
                        Inline  Module
                    </a>
                </li>
                <li>
                    <a href="" class="capitalize btn btn-xs btn-ghost">
                    @if(request()->routeIs('processqcmodule::assembly/sewing-online.inline-audit.measurement-audit.*'))
                            <x-heroicon-o-play class="w-5 h-5 text-green-700" />
                        @else <x-heroicon-o-play class="w-5 h-5" /> @endif
                        Measurement Audit
                    </a>
                </li>
                <li>
                    <a href="" class="capitalize btn btn-xs btn-ghost">
                        @if(request()->routeIs('processqcmodule::assembly/sewing-online.inline-audit.measurement-audit.*'))
                            <x-heroicon-o-play class="w-5 h-5 text-green-700" />
                        @else <x-heroicon-o-play class="w-5 h-5" /> @endif
                        First Bulk
                    </a>
                </li>
            </ul>
        </li>
      </ul>
    </li>
    <li>
      <ul class="px-5">
          <li><a href="#" class="text-sm font-semibold"> sewing 100% inspection </a></li>
          <li>
            <ul class="px-5">
              <li> <a href="#"> Endline Module </a> </li>
            </ul>
          </li>
      </ul>
    </li>
    <li>
      <ul class="px-5">
          <li><a href="#" class="text-sm font-semibold"> endline audit </a></li>
          <li>
            <ul class="px-5">
              <li> <a href="#"> Inline Inspection </a> </li>
            </ul>
          </li>
      </ul>
    </li>
    <li>
      <ul class="px-5">
          <li><a href="#" class="text-sm font-semibold">  Finishing  </a></li>
      </ul>
    </li>
    <li>
      <ul class="px-5">
          <li><a href="#" class="text-sm font-semibold"> inline audit  </a></li>
          <li>
            <ul class="px-5">
              <li> <a href="#"> Inline module </a> </li>
              <li> <a href="#"> measurement audit </a> </li>
            </ul>
          </li>
      </ul>
    </li>
    <li>
      <ul class="px-5">
          <li><a href="#" class="text-sm font-semibold"> sewing 100% inspection </a></li>
          <li>
            <ul class="px-5">
              <li> <a href="#"> Endline Module </a> </li>
            </ul>
          </li>
      </ul>
    </li>
    <li>
      <ul class="px-5">
          <li><a href="#" class="text-sm font-semibold">  finishing 100% inspection (measurement / appearance ) - optional defect founding entry </a></li>
          <li>
            <ul class="px-5">
              <li> <a href="#">100% measurement </a> </li>
            </ul>
          </li>
      </ul>
    </li>

    <!-- ------------------------------------- Compliance's Checklist and Product Safety -------------------------------  -->
    <li><h3 class="text-lg font-bold {{ request()->routeIs('complianceandproductsafety::*') ? 'text-blue-500':'' }}">Compliance's Checklist and Product Safety</h3></li>
    <li class="px-5"><a href="{{ route('complianceandproductsafety::safety.humidity') }}" class="btn btn-xs {{ request()->routeIs('complianceandproductsafety::safety.humidity.*') ? 'btn-primary':'btn-ghost' }}"> Humidity  </a></li>
    <li class="px-5"><a href="{{ route('complianceandproductsafety::safety.pull-test') }}" class="btn btn-xs {{ request()->routeIs('complianceandproductsafety::safety.pull-test.*') ? 'btn-primary':'btn-ghost' }}"> Pull Test  </a></li>
    <li class="px-5"><a href="{{ route('complianceandproductsafety::safety.button-testing') }}" class="btn btn-xs {{ request()->routeIs('complianceandproductsafety::safety.button-testing.*') ? 'btn-primary':'btn-ghost' }}"> Button Testing  </a></li>
    <li class="px-5"><a href="{{ route('complianceandproductsafety::safety.fusing-machine') }}" class="btn btn-xs {{ request()->routeIs('complianceandproductsafety::safety.fusing-machine.*') ? 'btn-primary':'btn-ghost' }}"> Fusing Machine  </a></li>
    <li class="px-5"><a href="{{ route('complianceandproductsafety::safety.heat-seal-machine') }}" class="btn btn-xs {{ request()->routeIs('complianceandproductsafety::safety.heat-seal-machine.*') ? 'btn-primary':'btn-ghost' }}"> Heat Seal Machine  </a></li>
    <li class="px-5"><a href="{{ route('complianceandproductsafety::safety.checklist-of-compliance') }}" class="btn btn-xs {{ request()->routeIs('complianceandproductsafety::safety.checklist-of-compliance.*') ? 'btn-primary':'btn-ghost' }}"> Compliance's CheckList  </a></li>
    <li class="px-5"><a href="{{ route('complianceandproductsafety::safety.needle-detector-calibration') }}" class="btn btn-xs {{ request()->routeIs('complianceandproductsafety::safety.needle-detector-calibration.*') ? 'btn-primary':'btn-ghost' }}"> Needle Detector Calibration  </a></li>


</ul>
