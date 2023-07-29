FROM python:3-bullseye

# set the working directory in the container
WORKDIR /app

# copy the dependencies file to the working directory
COPY requirements.txt .

# install dependencies
RUN pip install --no-cache-dir --upgrade pip -r requirements.txt

CMD ["python", "-m", "http.server", "8000"]
