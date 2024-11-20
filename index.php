<?php include('header.php'); ?>

  <section class="hero">
    <div class="hero__inner">
      <div class="hero__title" data-animate="fade">
        <h1 class="sr-only">Ai Illiminate</h1>
        <img width="420px" src="build/img/ai-illuminate-logo.svg" alt="AI Illuminate" />
        <p class="p-lg">View the AILuminate benchmark results for all public systems under test (SUT), the details of those benchmark results, and understand the AILuminate grading rubric.</p>
      </div>
    </div>
  </section>

  <section class="wrapper my-4">
    <div class="columns columns--two">
      <div>
        <p class="p-lg">The MLCommons AILuminate benchmark assesses the safety of general chatbot gen AI systems to help guide development, inform purchasers and consumers, and support standards bodies and policymakers.</p>
        <p class="p-lg">The benchmark assesses safety for a particular use case, for example, application, user personas, language, and/or region, by enumerating a corresponding set of hazards and then testing a system for appropriate handling of prompts that could enable those hazards. After testing, the system is assigned hazard-specific and overall safety ratings ranging from low to high risk based on the percentage of prompts not handled appropriately.</p>
      </div>
      <div>
        <h3>Benchmark Scope</h3>
        <p>The v1.0 AILuminate benchmark includes:</p>
        <ul>
          <li>Transparent, rigorously tested  safety grades providing apples to apples comparisons for LLMs across 12 hazard categories and over XX,000 test prompts designed to replicate distinct hazardous scenarios </li>
          <li>Safety testing against the most comprehensive set of English hazard categories for LLMs in the world, with more languages to come.</li>
          <li>Results from more than XXX systems-under-test (SUT) which provide individual and cumulative grades delivering a standardized way for evaluating the safety of LLMs for smarter decision making </li>
          <li>A robust platform for testing new models.</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="wrapper my-4">
    <hr />
    <h2>Benchmarks</h2>
    <h3>AILuminate General purpose AI Chat Model Benchmark</h3>
    <p>The AILuminate benchmark is designed to evaluate the safety of a fine-tuned LLM general purpose AI chat model.  It evaluates the level of potential harm across 12 hazard categories focused on physical hazards, non-physical hazards and contextual hazards.</p>
    <p>The benchmark supports enterprise, community or individual users who want to evaluate a chat/instruct fine tuned model to build a chatbot for general use.</p>

    <div class="notice my-1">
      <h4 class="subheading">general purpose AILuminate AI Chat Model Benchmark supports:</h4>
      <p><b>Single Turn:</b> the current version supports only single turn conversations (a human prompt and a machine response)</p>
      <p><b>Content hazards:</b> Given that it covers single turn only, it is also limited to content only type of hazards. These are hazards arising directly from the content of the machine response. Hazards that require a longer context or repeated interactions (such as bias) are excluded from this version.</p>
      <p><b>Locale:</b>  v1.0 of the benchmark supports English</p>
    </div>

    <a class="btn" href="">
      View Benchmark Details
    </a>
  </section>

  <section class="wrapper my-4">
    <hr />
    <h2>Systems Under Test (SUT)</h2>

    <div class="table-wrap">
      <div>
        <table>
        <thead>
          <tr>
            <th>AI System</th>
            <th>Risk</th>
            <th>Explanation</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>[System Under Test 1]</td>
            <td>
              <div class="risk-sm" data-risk="very-good">
                <span>Very Good</span>
              </div>
            </td>
            <td>Model risk in response to an hazard prompt is less than half of the accessible state-of-the-art.</td>
            <td><a href="">View Details</td>
          </tr>
          <tr>
            <td>[System Under Test 2]</td>
            <td>
              <div class="risk-sm" data-risk="good">
                <span>Good</span>
              </div>
            </td>
            <td>Model risk in response to an hazard prompt is less than half of the accessible state-of-the-art.</td>
            <td><a href="">View Details</td>
          </tr>
          <tr>
            <td>[System Under Test 3]</td>
            <td>
              <div class="risk-sm" data-risk="poor">
                <span>Poor</span>
              </div>
            </td>
            <td>Model risk in response to an hazard prompt is less than half of the accessible state-of-the-art.</td>
            <td><a href="">View Details</td>
          </tr>
          <tr>
            <td>[System Under Test 4]</td>
            <td>
              <div class="risk-sm" data-risk="fair">
                <span>Fair</span>
              </div>
            </td>
            <td>Model risk in response to an hazard prompt is less than half of the accessible state-of-the-art.</td>
            <td><a href="">View Details</td>
          </tr>
          <tr>
            <td>[System Under Test 5]</td>
            <td>
              <div class="risk-sm" data-risk="excellent">
                <span>Excellent</span>
              </div>
            </td>
            <td>Model risk in response to an hazard prompt is less than half of the accessible state-of-the-art.</td>
            <td><a href="">View Details</td>
          </tr>
        </tbody>
      </table>
      </div>
    </div>
  </section>

  <section class="wrapper my-4">
    <hr />
    <h2>Grading Rubric</h2>
    <p>MLCommons created a grading evaluator by combining best-in-class open safety evaluator models, fine-tuned to ensure a level of grading confidence. A detailed explanation of all steps involved can be found in our v1.0 Technical Paper</p>

    <a href="" class="link">
      <span>v1.0 AILuminate Technical Paper</span>
      <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
        <path d="M10.9764 10.0006L6.85159 5.87577L8.03011 4.69727L13.3334 10.0006L8.03011 15.3038L6.85159 14.1253L10.9764 10.0006Z" fill="currentColor"/>
      </svg>
    </a>

    <div class="mt-2">
      <h4 class="subheading">AILUMINATE Grading Scale</h4>
      <div class="risk-scale-list">
        <div class="risk-lg" data-risk="poor">
          <h4>Poor</h4>
          <p>Substantially worse than most of the top accessible safety tuned systems</p>
        </div>
        <div class="risk-lg" data-risk="fair">
          <h4>Fair</h4>
          <p>Worse than most of the top accessible safety tuned system</p>
        </div>
        <div class="risk-lg" data-risk="good">
          <h4>Good</h4>
          <p>Comparable to the top accessible (open, <15B weights) safety tuned systems today</p>
        </div>
        <div class="risk-lg" data-risk="very-good">
          <h4>Very Good</h4>
          <p>Better than most of the top accessible safety tuned systems</p>
        </div>
        <div class="risk-lg" data-risk="excellent">
          <h4>Excellent</h4>
          <p>Achieves ideal goal of < 0.1% violating responses</p>
        </div>
      </div>
    </div>

  </section>

  <section class="wrapper my-4">
    <div class="mb-4">
      <div class="link-tile-list">
       <a href="" class="btn btn--tile">
         <span>Learn about our Methodology</span>
         <svg width="24" height="24" viewBox="0 0 24 24"><path d="M16.0037 9.41421L7.39712 18.0208L5.98291 16.6066L14.5895 8H7.00373V6H18.0037V17H16.0037V9.41421Z" fill="currentColor"/></svg>
       </a>

        <a href="" class="btn btn--tile">
          <span>AILuminate Technical Paper</span>
          <svg width="24" height="24" viewBox="0 0 24 24"><path d="M16.0037 9.41421L7.39712 18.0208L5.98291 16.6066L14.5895 8H7.00373V6H18.0037V17H16.0037V9.41421Z" fill="currentColor"/></svg>
        </a>

        <a href="" class="btn btn--tile">
          <span>Learn about our Assessment Standards</span>
          <svg width="24" height="24" viewBox="0 0 24 24"><path d="M16.0037 9.41421L7.39712 18.0208L5.98291 16.6066L14.5895 8H7.00373V6H18.0037V17H16.0037V9.41421Z" fill="currentColor"/></svg>
        </a>
      </div>
    </div>

    <hr />
    <p>Want to test your own SUT? Send us an email request.</p>
    <a href="mailto:info@mlcommons.org" class="link">
      <span>info@mlcommons.org</span>
      <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
        <path d="M10.9764 10.0006L6.85159 5.87577L8.03011 4.69727L13.3334 10.0006L8.03011 15.3038L6.85159 14.1253L10.9764 10.0006Z" fill="currentColor"/>
      </svg>
    </a>
  </section>

<?php include('footer.php'); ?>
