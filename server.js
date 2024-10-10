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

const host = 'localhost'
const port = 7000

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
        to: 'dmitry.fedorovv@gmail.com',
        subject: `Сообщение от ${formData.get('user-name')}`,
        text: `Имя: ${formData.get('user-name')}\nКомпания: ${formData.get(
          'company'
        )}\nСообщение: ${formData.get('message')}`
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
