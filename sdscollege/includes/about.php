<?php include 'includes/header.php'; ?>

<style>
/* PAGE BACKGROUND */
.about-page {
    background-color: #0c5f23;
    padding: 60px 0;
}

/* SECTION TITLE */
.about-title {
    font-size: 2rem;
    font-weight: 800;
    color: #ffffff;
    border-left: 6px solid #f5c542;
    padding-left: 12px;
    margin-bottom: 40px;
}

/* CONTENT BOXES */
.about-box {
    background: #073d21;
    border-radius: 10px;
    padding: 25px;
    margin-bottom: 25px;
    color: #e8f5e9;
}

.about-box h3 {
    font-weight: 700;
    color: #f5c542;
    margin-bottom: 15px;
}

.about-box p, .about-box li {
    font-size: 0.95rem;
    color: #cfe8d4;
    line-height: 1.6;
}

.about-box ul {
    padding-left: 20px;
}

.learn-btn {
    background-color: #f5c542;
    color: #0c5f23;
    font-weight: 600;
    padding: 10px 18px;
    border-radius: 6px;
    text-decoration: none;
}
</style>

<!-- ABOUT PAGE -->
<section class="about-page">
    <div class="container">

        <h2 class="about-title">About St. Dominic Savio College</h2>

        <div class="row">

            <!-- OUR COLLEGE -->
            <div class="col-md-6">
                <div class="about-box">
                    <h3>Our College</h3>
                    <p>We empower students with relevant skills and real-world experiences, fostering a community of innovation and collaboration. Through project-based learning, industry partnerships, and mentorship, our students graduate as proactive problem-solvers, ready to lead and make a meaningful impact in their chosen fields.</p>

                    <p>Our curriculum integrates technology, industry partnerships, and mentorship to ensure graduates are career-ready and globally competitive.</p>

                    <a href="#" class="learn-btn mt-2">Learn More About Our College</a>
                </div>
            </div>

            <!-- VISION -->
            <div class="col-md-6">
                <div class="about-box">
                    <h3>Vision</h3>
                    <p>The Founder envisions SDSC, in two decades time, as one of the country's premier institutions of Higher learning in the holistic development of globally-competitive and conscientious leaders and professionals through:</p>

                    <ul>
                        <li>Definitive excellence in education that meets national demands and global standards;</li>
                        <li>Social activism for the improvement of the quality of life and general welfare of men;</li>
                        <li>Access and equity in scholarly opportunities; and</li>
                        <li>Elevation of the institution to university status.</li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="row">

            <!-- MISSION -->
            <div class="col-md-6">
                <div class="about-box">
                    <h3>Mission</h3>

                    <p>As a College, SDSC seeks to uphold and communicate truth by instilling it in the Savian scholar in all his scholarly, personal, and professional pursuits.</p>

                    <p>As a Filipino College, SDSC seeks to protect, preserve and promote Filipino culture. Through his healthy understanding of national identity, the Savian scholar will be the nation's spokesperson to the global community.</p>

                    <p>As a Filipino College with the global perspective, SDSC seeks to prepare the Savian scholar to the rigors and demands of the borderless world.</p>

                    <p>As a Savian College, SDSC seeks to realize the TOTAL DEVELOPMENT OF PERSONS. The college seeks to be a witness to the life and deeds of its patron saint, St. Dominic Savio, and to be an apostle to the saint's philosophy of “Love, Leadership, and Service”.</p>
                </div>
            </div>

            <!-- CORE VALUES -->
            <div class="col-md-6">
                <div class="about-box">
                    <h3>Core Values</h3>
                    <ul>
                        <li>Passion</li>
                        <li>Compassion</li>
                        <li>Integrity</li>
                        <li>Excellence</li>
                    </ul>
                </div>
            </div>

        </div>

        <!-- OUR COMMITMENT -->
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="about-box">
                    <h3>Our Commitment</h3>
                    <p>At SDSC, we remain committed to forming learners who are ready to flourish—academically, emotionally, spiritually, and socially.</p>
                    <p>We aim to shape globally competitive graduates who make a positive impact wherever they go.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>
<!-- Chatbot HTML -->
<div id="chatbot-button">💬</div>

<div id="chatbot-window">
  <div id="chatbot-header">
    <span>Chat with Savian Bot</span>
    <button id="close-chatbot" style="background:none;border:none;color:white;font-size:18px;">✖</button>
  </div>

  <div id="chatbot-messages"></div>

  <div id="chatbot-input-area">
    <input type="text" id="chatbot-input" placeholder="Type a message..." />
    <button id="chatbot-send">Send</button>
  </div>
</div>

<script>
// Open/Close Chatbot
document.getElementById("chatbot-button").onclick = () => {
  document.getElementById("chatbot-window").style.display = "block";
};

document.getElementById("close-chatbot").onclick = () => {
  document.getElementById("chatbot-window").style.display = "none";
};

// Send Message
document.getElementById("chatbot-send").onclick = sendMessage;
document.getElementById("chatbot-input").addEventListener("keypress", (e) => {
  if (e.key === "Enter") sendMessage();
});

function sendMessage() {
  const input = document.getElementById("chatbot-input");
  const messages = document.getElementById("chatbot-messages");
  const text = input.value.trim();
  if (!text) return;

  addMessage(text, "user");
  input.value = "";

  // Fake Bot Reply
  setTimeout(() => {
    addMessage("Thank you for contacting SDSC! How may I assist you today? 😊", "bot");
  }, 600);
}

function addMessage(text, sender) {
  const messages = document.getElementById("chatbot-messages");
  const msg = document.createElement("div");
  msg.classList.add("message", sender);
  msg.innerText = text;

  messages.appendChild(msg);
  messages.scrollTop = messages.scrollHeight;
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
