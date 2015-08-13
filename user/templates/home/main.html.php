<?php

	$this->expand('content', 'master.html');

	$this['title'] = 'Progress Is By Us - Tracking Progress';

	?>
	<section role="main">
		<h1>Progress Is By Us</h1>
		<p class="highlight">
			We want to know where our representatives stand on the bills we care about <em>before</em> they go to vote.  More, we want to know who is standing against the bills we support and why so that we can hold them accountable.
		</p>

		<div class="group container brochure">
			<div class="step">
				<h3><span class="order">1.</span> Find Out Who Represents You</h3>
				<p>
					Get a list of your current senators and your representative and their contact information.
				</p>
				<a class="action" href="https://www.opencongress.org/people/zipcodelookup">Find My Represenatives</a>
			</div>

			<div class="step">
				<h3><span class="order">2.</span> Find a Bill to Support</h3>
				<p>
					Browse and learn about progressive bills that need to garner support in order to be successful.
				</p>
				<a class="action" href="#learn">Learn</a>
			</div>

			<div class="step">
				<h3><span class="order">3.</span> Report Your Representatives</h3>
				<p>
					Contact your representative and ask them a few simple questions regarding the bills you support.
				</p>
				<a class="action" href="#report">Report</a>
			</div>
		</div>
	</section>

	<section id="learn">
		<h2>Learn About a Bill</h2>
		<p>
			Browse the list of bills below and learn a little bit about them.  Use the links to conduct independent research or read the full text if you're so inclined.  Once you found a bill that you support, call your senators or representative and fill in the report.
		</p>

		<div>
			<div class="bill">
				<h3>College for All Act (S.1373)</h3>
				<p>
					Eliminate Undergraduate Tuition at 4-year Public Colleges and Universities.
				</p>
				<p>
					This legislation would provide $47 billion per year to states to eliminate undergraduate tuition and fees at public colleges and universities. This legislation is offset by imposing a Wall Street speculation fee on investment houses, hedge funds, and other speculators of 0.5% on stock trades (50 cents for every $100 worth of stock), a 0.1% fee on bonds, and a 0.005% fee on derivatives
				</p>
				<dl class="group">
					<dt>Who to Contact:</dt><dd>Your Senators</dd>
					<dt>Current Status:</dt><dd>Introduced (114th)</dd>
					<dt>Sponsor:</dt><dd>Bernie Sanders (VT)</dd>
					<dt>Full Text:</dt><dd><a href="http://www.sanders.senate.gov/download/collegeforall/?inline=file">College for All Act</a></dd>
					<dt>Gov Track:</dt><dd><a href="https://www.govtrack.us/congress/bills/114/s1373">Visit</a></dd>
				</dl>
			</div>
		</div>
	</section>

	<section id="report">
		<h2>Report Your Representative</h2>

		<p>
			Each question is designed only to be answered if the previous question was answered in the affirmative.
		</p>

		<form>
			<fieldset>
				<label>What bill are you reporting on?</label>
				<select>
					<option value="">Select One...</option>
				</select>


				<label>Who are you reporting?</label>
				<select>
					<option value="">Select One...</option>
				</select>
			</fieldset>

			<div class="group brochure">
				<fieldset>
					<label>
						Are you familiar with this bill and what it intends to do?
					</label>
					<select>
						<option value="0">Select Answer</option>
						<option value="1">Yes</option>
						<option value="-1">No</option>
					</select>

					<label>
						Additional Optional Information
					</label>
					<textarea placeholder="What is your understanding of the bill?"></textarea>
				</fieldset>

				<fieldset>
					<label>
						Do you intend to support this bill if it comes to the floor and/or for a vote?
					</label>
					<select>
						<option value="0">Select Answer</option>
						<option value="1">Yes</option>
						<option value="-1">No</option>
					</select>

					<label>
						Additional Optional Information
					</label>
					<textarea placeholder="Why do/don't you support this bill?"></textarea>
				</fieldset>

				<fieldset>
					<label>
						Are you currently co-sponsoring or do you intend to cosponsor this bill?
					</label>
					<select>
						<option value="0">Select Answer</option>
						<option value="1">Yes</option>
						<option value="-1">No</option>
					</select>

					<label>
						Additional Optional Information
					</label>
					<textarea placeholder="What similar legislation have you supported and why?"></textarea>
				</fieldset>
			</div>

			<fieldset class="actions">
				<button type="submit">Submit</button>
				<button type="reset">Reset</button>
			</fieldset>
		</form>
	</section>
