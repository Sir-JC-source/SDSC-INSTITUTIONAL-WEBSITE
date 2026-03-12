<?php include 'includes/header_ibaan.php'; ?>

<style>
/* REMOVE ANY WHITE GAP */
body {
    background-color: #0d472e !important;
}

/* PAGE BACKGROUND */
.contact-section {
    background-color: #0d472e; /* SDSC Green */
    padding: 80px 0;
    color: #ffffff;
}

/* SECTION TITLE */
.contact-title {
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 10px;
}

.title-underline {
    width: 50px;
    height: 4px;
    background-color: #1bbf65; /* Light green accent */
    margin-bottom: 25px;
}

/* CONTACT DETAILS */
.contact-info p {
    font-size: 15px;
    opacity: 0.95;
}

/* ICON STYLE */
.contact-info i {
    color: #1bbf65;
    margin-right: 8px;
    font-size: 16px;
}

/* MAP BOX */
.map-container {
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 18px rgba(0, 0, 0, 0.4);
}

@media (max-width: 768px) {
    .map-container {
        margin-top: 30px;
    }
}
</style>

<!-- =============================== -->
<!--         CONTACT US PAGE        -->
<!-- =============================== -->

<section class="contact-section">
    <div class="container">

        <div class="row align-items-start">

            <!-- LEFT SIDE: CONTACT INFORMATION -->
            <div class="col-md-6 contact-info">

                <h2 class="contact-title">Contact Us</h2>
                <div class="title-underline"></div>

                <p>Have questions? Reach out and our admissions or support team will get back to you.</p>

                <p>
                    <i class="fa-solid fa-phone"></i>
                    0437277829
                </p>

                <p>
                    <i class="fa-solid fa-location-dot"></i>
                    J.P Rizal, Ibaan, 4230 Batangas
                </p>
            </div>

            <!-- RIGHT SIDE: GOOGLE MAP -->
            <div class="col-md-6">
                <div class="map-container">
                    <iframe 
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d775.9590992489603!2d121.1318506760676!3d13.818606772275873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd11cc4ad854df%3A0xfd7df3e7b747f6!2sSt.%20Dominic%20Savio%20College%20-%20Ibaan%20Branch!5e1!3m2!1sen!2sph!4v1733153800000!5m2!1sen!2sph" 
    width="100%" 
    height="350" 
    style="border:0;" 
    allowfullscreen="" 
    loading="lazy" 
    referrerpolicy="no-referrer-when-downgrade">
</iframe>

                </div>
            </div>

        </div>

    </div>
</section>

<?php include 'includes/footer_ibaan.php'; ?>
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
