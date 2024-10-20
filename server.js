const nodemailer = require('nodemailer')
const http = require('http')

var transporter = nodemailer.createTransport({
  host: 'smtp.yandex.ru',
  port: 465,
  secure: true,
  auth: {
    user: 'InvestSibsteklo@yandex.ru',
    pass: 'qxeaoxunwrpigpfl'
  }
})

const host = '0.0.0.0'
const port = 443

function notFound(res) {
  res.statusCode = 404
  res.setHeader('Content-Type', 'text/plain')
  res.end('Not found\n')
}

const server = http.createServer((req, res) => {
  res.setHeader('Access-Control-Allow-Origin', '*')
  res.setHeader('Access-Control-Allow-Methods', 'GET, OPTIONS, POST')

  if (req.method === 'POST' && req.url === '/sendEmail') {
    let body = ''

    req.on('data', (chunk) => {
      body += chunk.toString()
    })

    req.on('end', () => {
      const formData = new URLSearchParams(body)

      const mailOptions = {
        from: 'InvestSibsteklo@yandex.ru',
        to: 'primary@uscapital.ru', // адресат
        cc: 'InvestSibsteklo@yandex.ru', // копия
        replyTo: formData.get('email'),
        subject: `Новая заявка из формы на сайте для инвесторов | Сибстекло`,
        html: `
        <div style="background-color: #f0f0f0; padding: 20px;">
        <div style="max-width: 600px; margin: 0 auto; background-color: #ffffff; padding: 20px; border-radius: 8px;">
          <div style="text-align: center;">
          <a href="https://invest.sibstek.ru/"><img src="https://sibstek.ru/images/logo-sibirskoe-steklo.png" alt="Лого Сибирское Стекло" style="max-width: 200px; margin-bottom: 20px;"></a>
          </div>
          <h2 style="text-align: center;">Новая заявка из формы «Как стать инвестором»</h2>
          <p><strong>Имя:</strong> ${formData.get('user-name')}</p>
          <p><strong>Компания:</strong> ${formData.get('company')}</p>
          <p><strong>Должность:</strong> ${formData.get('position')}</p>
          <p><strong>Телефон:</strong> ${formData.get('user-cellphone')}</p>
          <p><strong>Email:</strong> <a href="mailto:${formData.get(
            'email'
          )}">${formData.get('email')}</a></p>
          <p><strong>Сообщение:</strong></p>
          <p>${formData.get('message')}</p>
          <br><hr>
          <p style="text-align: center; color: #777;">Это автоматическое письмо. Пожалуйста, не отвечайте на него.</p>
        </div>
      </div>
        `
      }

      transporter.sendMail(mailOptions, function (error, info) {
        if (error) {
          console.log(error)
          res.statusCode = 500
          res.end('Ошибка при отправке письма\n')
        } else {
          console.log('Email sent: ' + info.response)
          res.statusCode = 200
          res.end('Письмо успешно отправлено\n')
        }
      })
    })
  } else {
    notFound(res)
  }
})

server.listen(port, host, () => {
  console.log(`Server listens http://${host}:${port}`)
})
