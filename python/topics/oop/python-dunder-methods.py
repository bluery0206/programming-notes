import time

class Timer:
     def __enter__(self):
          self.start = time.perf_counter()
          print("Starting timer...")
          return self

     def __exit__(self, exc_type, exc_val, exc_tb):
          print(exc_type, exc_val, exc_tb)
          self.end = time.perf_counter()
          self.elapsed = self.end - self.start
          print(f"Timer stopped. Elapsed time: {self.elapsed:.4f} seconds")

with Timer():
     total = sum(range(1000000))
     print("Sum calculated:", total)
