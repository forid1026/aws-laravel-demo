<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>AWS Laravel Deployment</title>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        min-height: 100vh;
        font-family: Inter, Arial, sans-serif;
        background:
            radial-gradient(circle at top left, rgba(255, 153, 0, 0.15), transparent 35%),
            radial-gradient(circle at bottom right, rgba(99, 102, 241, 0.15), transparent 35%),
            #080b12;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 30px;
    }

    .container {
        width: 100%;
        max-width: 950px;
        text-align: center;
    }

    .badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 16px;
        border: 1px solid rgba(255, 153, 0, 0.3);
        background: rgba(255, 153, 0, 0.08);
        border-radius: 50px;
        color: #ffad33;
        font-size: 14px;
        margin-bottom: 28px;
    }

    .dot {
        width: 8px;
        height: 8px;
        background: #22c55e;
        border-radius: 50%;
        box-shadow: 0 0 12px #22c55e;
    }

    h1 {
        font-size: clamp(42px, 7vw, 76px);
        line-height: 1.05;
        font-weight: 800;
        letter-spacing: -3px;
        margin-bottom: 22px;
    }

    h1 span {
        background: linear-gradient(90deg, #ff9900, #ffb84d);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .subtitle {
        max-width: 680px;
        margin: 0 auto;
        color: #9ca3af;
        font-size: 18px;
        line-height: 1.7;
    }

    .cards {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 18px;
        margin-top: 55px;
    }

    .card {
        padding: 26px 20px;
        background: rgba(255, 255, 255, 0.035);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 18px;
        transition: 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        border-color: rgba(255, 153, 0, 0.35);
        background: rgba(255, 153, 0, 0.05);
    }

    .icon {
        font-size: 32px;
        margin-bottom: 14px;
    }

    .card h3 {
        font-size: 17px;
        margin-bottom: 8px;
    }

    .card p {
        color: #8b93a1;
        font-size: 14px;
    }

    .tech {
        margin-top: 45px;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 10px;
    }

    .tech span {
        padding: 7px 13px;
        border-radius: 8px;
        background: #111827;
        border: 1px solid #1f2937;
        color: #cbd5e1;
        font-size: 13px;
    }

    footer {
        margin-top: 45px;
        color: #596273;
        font-size: 13px;
    }

    @media (max-width: 700px) {
        .cards {
            grid-template-columns: 1fr;
        }

        h1 {
            letter-spacing: -2px;
        }

        .subtitle {
            font-size: 16px;
        }
    }
</style>


</head>

<body>

<div class="container">


<div class="badge">
    <span class="dot"></span>
    Successfully Deployed
</div>

<h1>
    Laravel is Live on <span>AWS</span> 🚀
</h1>

<p class="subtitle">
    My first Laravel application successfully deployed on Amazon Web Services.
    This is the beginning of my journey into cloud deployment, Linux servers,
    DevOps and scalable web applications.
</p>

<div class="cards">

    <div class="card">
        <div class="icon">☁️</div>
        <h3>AWS Server</h3>
        <p>Laravel application running on an AWS EC2 instance.</p>
    </div>

    <div class="card">
        <div class="icon">🐘</div>
        <h3>Laravel</h3>
        <p>A fresh Laravel application deployed to a production server.</p>
    </div>

    <div class="card">
        <div class="icon">⚡</div>
        <h3>Nginx</h3>
        <p>Web traffic is served through Nginx on the Linux server.</p>
    </div>

</div>

<div class="tech">
    <span>Laravel</span>
    <span>PHP</span>
    <span>Ubuntu</span>
    <span>Nginx</span>
    <span>AWS EC2</span>
    <span>Git</span>
    <span>GitHub</span>
</div>

<footer>
    Built with Laravel • Deployed on AWS • 2026
</footer>


</div>

</body>
</html>
