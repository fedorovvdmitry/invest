const nodemailer = require("nodemailer");
const http = require("http");

var transporter = nodemailer.createTransport({
  host: "smtp.yandex.ru",
  port: 465,
  secure: true,
  auth: {
    user: "InvestSibsteklo@yandex.ru",
    pass: "qxeaoxunwrpigpfl",
  },
});

const mailOptions = {
  from: "InvestSibsteklo@yandex.ru",
  to: "daniil_telenkov@vk.com",
  subject: "Sending Email using Node.js",
  text: "That was easy!",
};

const host = "localhost";
const port = 7000;

function notFound(res) {
  res.statusCode = 404;
  res.setHeader("Content-Type", "text/plain");
  res.end("Not found\n");
}

const server = http.createServer((req, res) => {
  res.setHeader("Access-Control-Allow-Origin", "*");
  res.setHeader("Access-Control-Allow-Methods", "GET, OPTION, POST");

  switch (req.method) {
    case "POST": {
      switch (req.url) {
        case "/sendEmail": {
          res.statusCode = 200;
          res.setHeader("Content-Type", "text/plain");

          transporter.sendMail(mailOptions, function (error, info) {
            if (error) {
              console.log(error);
            } else {
              console.log("Email sent: " + info.response);
            }
          });

          res.end("send mail success\n");
          break;
        }
        default: {
          notFound(res);
          break;
        }
      }

      break;
    }
    default: {
      notFound(res);
      break;
    }
  }
});

server.listen(port, host, () => {
  console.log(`Server listens http://${host}:${port}`);
});
