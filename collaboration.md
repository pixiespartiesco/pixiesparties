---
layout: page
title: "Creator & Influencer Collaborations | Pixies Parties"
description: "Partner with Pixies Parties in Calgary for gifted character entertainment in exchange for high-quality photo and video content."
permalink: /collaborate/
---

<main class="collaboration-page">
  <header class="page-header">
    <h1>Creator &amp; Influencer Collaborations</h1>
    <p class="lead">Let’s create some magic together! We love partnering with local Calgary-area content creators and family lifestyle influencers to capture authentic, joyful party moments.</p>
  </header>

  <section class="collab-offer">
    <h2>What We Gift</h2>
    <p>When we partner with creators whose content aligns with our brand, we offer a <strong>complimentary party experience</strong> for your child's celebration, including:</p>
    <ul>
      <li><strong>90-Minute Deluxe Party Package ($350 CAD value):</strong> Includes a character appearance of your choice, Royal Coronation, Glitter Tattoos, storytelling, games, and supplies for up to 10 children.</li>
      <li><strong>Castle Backdrop Rental ($80 CAD value):</strong> A stunning photo-ready setup for your party space.</li>
    </ul>
    <p><em>Note: Collaborations are subject to performer availability and must take place within our standard Calgary service area. Standard add-on fees apply for more than 10 children ($10/additional child) and for travel outside of the Calgary city limits.</em></p>
  </section>

  <hr />

  <section class="collab-requirements">
    <h2>What We Ask in Exchange</h2>
    <p>In exchange for the gifted party package, we ask for a content trade consisting of:</p>
    <ol>
      <li><strong>One Short-Form Video (Instagram Reel &amp; TikTok):</strong> A high-energy, engaging video showcasing the party fun, posted within 7 days of the event and tagging <strong>@pixiesparties</strong> (with a collaborator invite on Instagram).</li>
      <li><strong>Raw Media Folder:</strong> Access to a Google Drive or Dropbox folder containing your unedited video clips and high-resolution photos from the celebration.</li>
      <li><strong>Full Commercial Usage Rights:</strong> Permission for Pixies Parties to use, edit, and share the photos and videos across our website, social media channels, ads, and future marketing materials.</li>
    </ol>
  </section>

  <hr />

  <section class="collab-apply">
    <h2>How to Apply</h2>
    <p>We review collaboration requests on a case-by-case basis depending on our calendar availability and content needs. If you have an upcoming celebration and would love to partner with us, please reach out via the form below</p>
    <div class="container my-5" id="apply">
      <div class="row justify-content-center">
          <div class="col-lg-10">
              <div class="card contact-card">
                  <div class="row g-0">
                      <!-- Sidebar Section -->
                      <div class="col-md-4 contact-sidebar d-flex flex-column justify-content-center">
                          <h2 class="mb-4">Partner With Us</h2>
                          <p class="mb-4 opacity-75">Tell us about your platform and your upcoming celebration to apply for a gifted Deluxe Party &amp; Castle Backdrop collaboration.</p>
                          <div class="d-flex align-items-center mb-3">
                              <i class="bi bi-gift fs-4 me-3"></i>
                              <span>$430 CAD Package Value</span>
                          </div>
                          <div class="d-flex align-items-center">
                              <i class="bi bi-geo-alt fs-4 me-3"></i>
                              <span>Calgary &amp; Area</span>
                          </div>
                      </div>
                      <!-- Form Section -->
                      <div class="col-md-8 p-3 form-container">
                          <form action="https://formspree.io/f/mzddpglr" method="POST">
                              <!-- Identifies this submission in your Formspree inbox -->
                              <input type="hidden" name="_subject" value="New Influencer Collaboration Inquiry" />
                              <div class="row g-3 mb-3">
                                  <div class="col-md-6">
                                      <label class="form-label">Your Name</label>
                                      <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                                  </div>
                                  <div class="col-md-6">
                                      <label class="form-label">Email Address</label>
                                      <input type="email" name="email" class="form-control" placeholder="name@example.com" required>
                                  </div>
                                  <div class="col-md-6">
                                      <label class="form-label">Instagram Handle</label>
                                      <input type="text" name="instagram" class="form-control" placeholder="@yourhandle" required>
                                  </div>
                                  <div class="col-md-6">
                                      <label class="form-label">Media Kit (url)</label>
                                      <input type="text" name="mediakit" class="form-control" placeholder="mymediakit.ca/username">
                                  </div>
                                  <div class="col-md-6">
                                      <label class="form-label">Follower Count</label>
                                      <input type="number" name="followercount" class="form-control" placeholder="20000" required>
                                  </div>
                                  <div class="col-md-6">
                                      <label class="form-label">Average Reach</label>
                                      <input type="number" name="reachcount" class="form-control" placeholder="500000" required>
                                  </div>
                                  <div class="col-md-6">
                                      <label class="form-label">Event Date</label>
                                      <input type="date" name="event_date" class="form-control" required>
                                  </div>
                                  <div class="col-md-6">
                                      <label class="form-label">Event Time</label>
                                      <input type="time" name="event_time" class="form-control" step="1800" min="10:00" max="22:00" required>
                                  </div>
                                  <div class="col-md-6">
                                      <label class="form-label">City / Neighbourhood</label>
                                      <input type="text" name="location" class="form-control" placeholder="e.g. NW Calgary, Airdrie, Cochrane" required>
                                  </div>
                                  <div class="col-md-6">
                                      <label class="form-label">Estimated Child Guest Count</label>
                                      <input type="number" name="guest_count" class="form-control" min="1" max="30" placeholder="Up to 10 included" required>
                                  </div>
                                  <div class="col-md-6">
                                      <label class="form-label">Character Choice</label>
                                      <select name="character" class="form-select">
                                          <option value="" selected disabled>Select a character...</option>
                                          {% for c in site.characters %}
                                          {% assign value = c.name | replace: " ", "-" | downcase | strip %}
                                          <option value="{{ value }}">{{ c.name }}</option>
                                          {% endfor %}
                                          <option value="other">Other</option>
                                      </select>
                                  </div>
                                  <div class="col-md-6">
                                      <label class="form-label">Other Character / Theme</label>
                                      <input type="text" name="other_character" class="form-control" placeholder="Specify if other">
                                  </div>
                              </div>
                              <div class="mb-3">
                                  <label class="form-label">Party &amp; Content Details</label>
                                  <textarea name="message" class="form-control" rows="3" placeholder="Tell us about your child's celebration, indoor/outdoor setup space for the Castle Backdrop, and your content style..." required></textarea>
                              </div>
                              <div class="form-check mb-4">
                                  <input class="form-check-input" type="checkbox" name="terms_agreed" id="collabTerms" value="Agreed" required>
                                  <label class="form-check-label small" for="collabTerms">
                                      I agree to provide 1 Reel/TikTok tagging @pixiesparties, raw high-res photos/videos via Google Drive/Dropbox, and full commercial usage rights in exchange for the gifted package.
                                  </label>
                              </div>
                              <!-- Anti-spam & Redirect -->
                              <input type="text" name="_gotcha" style="display:none">
                              <input type="hidden" name="_next" value="/thank-you" />
                              <div class="d-grid">
                                  <button type="submit" class="btn btn-secondary shadow-sm">
                                      Submit Collaboration Request
                                  </button>
                              </div>
                              <p class="text-center text-muted mt-3 small">
                                  We review creator partnerships weekly and reply within 48 hours.
                              </p>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </section>

  
</main>