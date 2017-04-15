<?php include('header.html'); ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                <h1>
                   Benchmarks
                </h1>
                </div>
                
               <ul class="nav nav-tabs" role="tablist">
				    <li role="presentation" class="active"><a href="#timeevolution1" aria-controls="timeevolution1" role="tab" data-toggle="tab">Time Evolution 1</a></li>
				    <li role="presentation"><a href="#timeevolution2" aria-controls="timeevolution2" role="tab" data-toggle="tab">Time Evolution 2</a></li>
				    <li role="presentation"><a href="#timeevolution3" aria-controls="timeevolution3" role="tab" data-toggle="tab">Time Evolution 3</a></li>
				    <li role="presentation"><a href="#expectationvalue" aria-controls="expectationvalue" role="tab" data-toggle="tab">Expectation Value</a></li>
				    <li role="presentation"><a href="#qfunction" aria-controls="qfunction" role="tab" data-toggle="tab">Q-Function</a></li>
				    <li role="presentation"><a href="#multiplication" aria-controls="multiplication" role="tab" data-toggle="tab">Multiplication</a></li>
               </ul>
                
            </div>
        </div>
       
       

        <div class="row">
	        <div class="col-lg-12">
	        <div class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active" id="timeevolution1">
					<div class="page-header">
						<h2>Time Evolution 1: Pumped cavity mode with photon loss</h2>
					</div>
					
					<div class="row">
						<div class="col-md-6">

                    <p>A cavity mode, modeled as a Fock space with a certain cutoff, is driven on resonance with a classical laser. Since photon loss is included, the system is an open system and evolves according to a master equation

                    <!-- \dot{\rho} = -\frac{i}{\hbar} \big[H,\rho\big] +  \kappa\big(a\rho a^\dagger - \frac{1}{2} a^\dagger a \rho - \frac{1}{2} \rho a^\dagger a \big) -->
                    <math xmlns="http://www.w3.org/1998/Math/MathML" display="block"><mrow class="MJX-TeXAtom-ORD">  <mover>    <mi>&#x03C1;<!-- ρ --></mi>    <mo>&#x02D9;<!-- ˙ --></mo>  </mover></mrow><mo>=</mo><mo>&#x2212;<!-- − --></mo><mfrac>  <mi>i</mi>  <mi class="MJX-variant">&#x210F;<!-- ℏ --></mi></mfrac><mrow class="MJX-TeXAtom-ORD">  <mo maxsize="1.2em" minsize="1.2em">[</mo></mrow><mi>H</mi><mo>,</mo><mi>&#x03C1;<!-- ρ --></mi><mrow class="MJX-TeXAtom-ORD">  <mo maxsize="1.2em" minsize="1.2em">]</mo></mrow><mo>+</mo><mi>&#x03BA;<!-- κ --></mi><mrow class="MJX-TeXAtom-ORD">  <mo maxsize="1.2em" minsize="1.2em">(</mo></mrow><mi>a</mi><mi>&#x03C1;<!-- ρ --></mi><msup>  <mi>a</mi>  <mo>&#x2020;<!-- † --></mo></msup><mo>&#x2212;<!-- − --></mo><mfrac>  <mn>1</mn>  <mn>2</mn></mfrac><msup>  <mi>a</mi>  <mo>&#x2020;<!-- † --></mo></msup><mi>a</mi><mi>&#x03C1;<!-- ρ --></mi><mo>&#x2212;<!-- − --></mo><mfrac>  <mn>1</mn>  <mn>2</mn></mfrac><mi>&#x03C1;<!-- ρ --></mi><msup>  <mi>a</mi>  <mo>&#x2020;<!-- † --></mo></msup><mi>a</mi><mrow class="MJX-TeXAtom-ORD">  <mo maxsize="1.2em" minsize="1.2em">)</mo></mrow></math>

                    with Hamiltonian

                    <!-- H = \eta (a + a^\dagger). -->
                    <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">  <mi>H</mi>  <mo>=</mo>  <mi>&#x03B7;<!-- η --></mi>  <mo stretchy="false">(</mo>  <mi>a</mi>  <mo>+</mo>  <msup>    <mi>a</mi>    <mo>&#x2020;<!-- † --></mo>  </msup>  <mo stretchy="false">)</mo><mo>.</mo></math>

                    </p>
                    <p>
	                    This benchmark measures the time it takes to create all necessary operators and states, perform a time-evolution according to a master equation and calculate the expectation value of the number operator at certain times.
                    </p>
						</div>
						<div class="col-md-6">
                    	   <canvas id="plot-timeevolution-master"></canvas>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="page-header">
								<h3>Source Code</h3>
							</div>
							
							<div class="panel-group" id="accordion-timeevolution1" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default panel-jl">
    <div class="panel-heading" role="tab">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion-timeevolution1" href="#timeevolution1-jl">
          QuantumOptics.jl
        </a>
      </h4>
    </div>
    <div id="timeevolution1-jl" class="panel-collapse collapse" role="tabpanel">
      <div class="panel-body">
	      <?php include('benchmarks-sourcecode/timeevolution_master_jl.html'); ?>
      </div>

    </div>
  </div>
  <div class="panel panel-default panel-py">
    <div class="panel-heading" role="tab">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion-timeevolution1" href="#timeevolution1-py">
          QuTiP (Python)
        </a>
      </h4>
    </div>
    <div id="timeevolution1-py" class="panel-collapse collapse" role="tabpanel">
      <div class="panel-body">
	      <?php include('benchmarks-sourcecode/timeevolution_master_py.html'); ?>
      </div>

    </div>
  </div>
   <div class="panel panel-default panel-m">
    <div class="panel-heading" role="tab">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion-timeevolution1" href="#timeevolution1-m">
          Quantum Optics Toolbox (MATLAB)
        </a>
      </h4>
    </div>
    <div id="timeevolution1-m" class="panel-collapse collapse" role="tabpanel">
      <div class="panel-body">
	      <?php include('benchmarks-sourcecode/timeevolution_master_m.html'); ?>
      </div>

    </div>
  </div>
</div>
						</div>
					</div>
				</div>
				
				<div role="tabpanel" class="tab-pane fade" id="timeevolution2">
					<div class="page-header">
						<h2>Time Evolution 2: Pumped cavity mode with photon loss (labframe)</h2>
					</div>
					
					<div class="row">
						<div class="col-md-6">
							
                    <p>Revisiting the first example, the system is now simulated without using the rotating frame of the driving laser. The pumping term then becomes time dependent and the Hamiltonian is

                    <!-- H(t) = \omega_c a^\dagger a + \eta \big(a e^{i\omega t} + a^\dagger e^{-i \omega t}\big). -->
                    <math xmlns="http://www.w3.org/1998/Math/MathML" display="block"><mi>H</mi><mo stretchy="false">(</mo><mi>t</mi><mo stretchy="false">)</mo><mo>=</mo><msub>  <mi>&#x03C9;<!-- ω --></mi>  <mi>c</mi></msub><msup>  <mi>a</mi>  <mo>&#x2020;<!-- † --></mo></msup><mi>a</mi><mo>+</mo><mi>&#x03B7;<!-- η --></mi><mrow class="MJX-TeXAtom-ORD">  <mo maxsize="1.2em" minsize="1.2em">(</mo></mrow><mi>a</mi><msup>  <mi>e</mi>  <mrow class="MJX-TeXAtom-ORD">    <mi>i</mi>    <mi>&#x03C9;<!-- ω --></mi>    <mi>t</mi>  </mrow></msup><mo>+</mo><msup>  <mi>a</mi>  <mo>&#x2020;<!-- † --></mo></msup><msup>  <mi>e</mi>  <mrow class="MJX-TeXAtom-ORD">    <mo>&#x2212;<!-- − --></mo>    <mi>i</mi>    <mi>&#x03C9;<!-- ω --></mi>    <mi>t</mi>  </mrow></msup><mrow class="MJX-TeXAtom-ORD">  <mo maxsize="1.2em" minsize="1.2em">)</mo></mrow><mo>.</mo></math>


                    </p>
                    </div>
						<div class="col-md-6">
                    	   <canvas id="plot-timeevolution-timedependent"></canvas>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="page-header">
								<h3>Source Code</h3>
							</div>
							
							<div class="panel-group" id="accordion-timeevolution2" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default panel-jl">
    <div class="panel-heading" role="tab">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion-timeevolution2" href="#timeevolution2-jl">
          QuantumOptics.jl
        </a>
      </h4>
    </div>
    <div id="timeevolution2-jl" class="panel-collapse collapse" role="tabpanel">
      <div class="panel-body">
	      <?php include('benchmarks-sourcecode/timeevolution_timedependent_jl.html'); ?>
      </div>

    </div>
  </div>
  <div class="panel panel-default panel-py">
    <div class="panel-heading" role="tab">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion-timeevolution2" href="#timeevolution2-py">
          QuTiP (Python)
        </a>
      </h4>
    </div>
    <div id="timeevolution2-py" class="panel-collapse collapse" role="tabpanel">
      <div class="panel-body">
	      <?php include('benchmarks-sourcecode/timeevolution_timedependent_py.html'); ?>
      </div>

    </div>
  </div>
</div>
						</div>
					</div>
				</div>
				
				<div role="tabpanel" class="tab-pane fade" id="timeevolution3">
					<div class="page-header">
						<h2>Time Evolution 3: Particle in harmonic trap (Schrödinger equation)</h2>
					</div>
					
					<div class="row">
						<div class="col-md-6">
							<p>A discretized position space is used to simulate the movement of an, initially gaussian, wave-packet in an harmonic trap potential according to the Schrödinger equation

                    <!-- i\hbar\frac{\mathrm{d}}{\mathrm{d} t} |\Psi(t)\rangle = H |\Psi(t)\rangle -->
                    <math xmlns="http://www.w3.org/1998/Math/MathML" display="block"><mi>i</mi><mi class="MJX-variant">&#x210F;<!-- ℏ --></mi><mfrac>  <mrow class="MJX-TeXAtom-ORD">    <mi mathvariant="normal">d</mi>  </mrow>  <mrow>    <mrow class="MJX-TeXAtom-ORD">      <mi mathvariant="normal">d</mi>    </mrow>    <mi>t</mi>  </mrow></mfrac><mrow class="MJX-TeXAtom-ORD">  <mo stretchy="false">|</mo></mrow><mi mathvariant="normal">&#x03A8;<!-- Ψ --></mi><mo stretchy="false">(</mo><mi>t</mi><mo stretchy="false">)</mo><mo fence="false" stretchy="false">&#x27E9;<!-- ⟩ --></mo><mo>=</mo><mi>H</mi><mrow class="MJX-TeXAtom-ORD">  <mo stretchy="false">|</mo></mrow><mi mathvariant="normal">&#x03A8;<!-- Ψ --></mi><mo stretchy="false">(</mo><mi>t</mi><mo stretchy="false">)</mo><mo fence="false" stretchy="false">&#x27E9;<!-- ⟩ --></mo></math>

                    with Hamiltonian

                    <!-- H = p^2 + 2*x^2. -->
                    <math xmlns="http://www.w3.org/1998/Math/MathML" display="block"><mi>H</mi><mo>=</mo><msup>  <mi>p</mi>  <mn>2</mn></msup><mo>+</mo><mn>2</mn><mo>&#x2217;<!-- ∗ --></mo><msup>  <mi>x</mi>  <mn>2</mn></msup> <mo>.</mo></math>
							</p>

                    <p>This benchmark measures only the time it takes to perform the time-evolution and calculating the expectation values. Creating all necessary operators and states is done separately.
							</p>
						</div>
						<div class="col-md-6">
                    	   <canvas id="plot-timeevolution-particle"></canvas>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="page-header">
								<h3>Source Code</h3>
							</div>
							
							<div class="panel-group" id="accordion-timeevolution3" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default panel-jl">
    <div class="panel-heading" role="tab">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion-timeevolution3" href="#timeevolution3-jl">
          QuantumOptics.jl
        </a>
      </h4>
    </div>
    <div id="timeevolution3-jl" class="panel-collapse collapse" role="tabpanel">
      <div class="panel-body">
	      <?php include('benchmarks-sourcecode/timeevolution_particle_jl.html'); ?>
      </div>

    </div>
  </div>
  <div class="panel panel-default panel-py">
    <div class="panel-heading" role="tab">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion-timeevolution3" href="#timeevolution3-py">
          QuTiP (Python)
        </a>
      </h4>
    </div>
    <div id="timeevolution3-py" class="panel-collapse collapse" role="tabpanel">
      <div class="panel-body">
	      <?php include('benchmarks-sourcecode/timeevolution_particle_py.html'); ?>
      </div>

    </div>
  </div>
</div>
						</div>
					</div>
				</div>
				
				<div role="tabpanel" class="tab-pane fade" id="expectationvalue">
					<div class="page-header">
						<h2>Expectation Value</h2>
					</div>
					
					<div class="row">
						<div class="col-md-6">
							<canvas id="plot-expect-state"></canvas>
						</div>
						<div class="col-md-6">
                    	   <canvas id="plot-expect-operator"></canvas>
						</div>
					</div>
					
					<div class="page-header">
						<h2>Variance</h2>
					</div>
					
					<div class="row">
						<div class="col-md-6">
							<canvas id="plot-variance-state"></canvas>
						</div>
						<div class="col-md-6">
                    	   <canvas id="plot-variance-operator"></canvas>
						</div>
					</div>
					
					<div class="page-header">
						<h2>Partial Trace</h2>
					</div>
					
					<div class="row">
						<div class="col-md-6">
							<canvas id="plot-ptrace"></canvas>
						</div>
					</div>
				</div>
				
				<div role="tabpanel" class="tab-pane fade" id="qfunction">
					<div class="page-header">
						<h2>Coherent State</h2>
					</div>
					
					<div class="row">
						<div class="col-md-6">
							<canvas id="plot-coherentstate"></canvas>
						</div>
					</div>
					
					<div class="page-header">
						<h2>Q-Function</h2>
					</div>
					
					<div class="row">
						<div class="col-md-6">
							<canvas id="plot-qfunc-state"></canvas>
						</div>
						<div class="col-md-6">
                    	   <canvas id="plot-qfunc-operator"></canvas>
						</div>
					</div>
					
				</div>
				
				<div role="tabpanel" class="tab-pane fade" id="multiplication">
					<div class="page-header">
						<h2>Matrix-Matrix Multiplication</h2>
					</div>
					
					<div class="row">
						<div class="col-md-6">
							<canvas id="plot-multiplication-sparse-sparse"></canvas>
						</div>
						<div class="col-md-6">
							<canvas id="plot-multiplication-sparse-dense"></canvas>
						</div>
					</div>
			
				<div class="row">
						<div class="col-md-6">
							<canvas id="plot-multiplication-dense-sparse"></canvas>
						</div>
						<div class="col-md-6">
                    	   <canvas id="plot-multiplication-dense-dense"></canvas>
						</div>
					</div>
					
				</div>
	        </div>
	        </div>
        </div>
        
        <div class="row">
	        <div class="col-lg-12">
							<div class="page-header">
								<h3>About Benchmarking</h3>
							</div>
							
							<p>Benchmarking is a tricky thing to do right. Many different variables can significantly influence the results. The choice of examples and the presentation of the results may be biased towards one or the other framework. We tried our best to be as fair as possible. To give everybody the chance to reproduce our results, the entire benchmarking code is open source and can be found in the <a href="https://github.com/bastikr/QuantumOpticsFrameworks-Benchmarks">QuantumOpticsFrameworks-Benchmarks repository on GitHub</a>. If you find any mistakes or obtain different results we would be grateful if you could file an issue there.
                </p>
							<p>A few remarks on the benchmarking process:</p>
							<ul>
								<li>All benchmarks are performed on a <strong>single dedicated CPU core</strong>. Both cases, single-processing and multi-processing, are of interest with slightly different implications. Obviously, when working interactively on a single example, the complete available processing power should be used to get the answer as fast as possible. However, for embarrassingly parallel problems, like for example performing the same time-evolution for different parameters, it is favorable to avoid any unnecessary overhead stemming from premature parallelization.</li>
								<li><strong>Startup time is neglected</strong>. Julia's just-in-time compilation, which is the key to generating extremely performant code, comes with a price. The first time a function is called with a certain set of argument types it has to be compiled which leads to a constant offset in every single benchmark. If the function is called often enough and/or runs long enough this overhead doesn't matter. However, if a function is called only once the overhead might be considerable and is the reason why often times using Julia feels less snappy compared to other languages.</li>
							</ul>
						</div>
        </div>
    </div>

    
				
				
 <?php include('footer.html'); ?>

